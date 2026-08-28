# P3 Task 5 Report — BackfillWorker + FetchQueue (fork port, no redis)

**Status:** DONE — commit `feat(backfill): port quota-sliced backfill worker + fetch queue from owner's fork designs`
**Gates:** phpunit **OK (154 tests, 9653 assertions; 140 after Task 1's parallel landing + 14 new)** · phpstan level 5 + disallowed-calls **[OK]** · zero `preg_` in `src/` · no network, no redis, no amphp — callables injected everywhere

## What shipped

### 1. `src/Backfill/FetchQueue.php` — peer queue + attempts + dead-letter (plain arrays)

SQL-backed fork (`Sync/FetchQueue.php`) semantics onto pure PHP state: `push`/`pop` FIFO claim, `fail(peer, reason)` attempts++ → re-queue at back (idempotent — no duplicate re-queue, dead peers purged from pending), `complete`, `attemptsFor`, `deadLetters`/`deadReasons`/`deadLetterCount`, `counts()`. `MAX_ATTEMPTS = 5` mirrored. `quotaSlice(remaining, cost)` ported **verbatim** — "Max fetches runnable now while reserving >= 50% of remaining quota headroom." = `intdiv(intdiv(remaining, 2), costPerFetch)`; degenerate inputs (remaining ≤ 0, cost ≤ 0) → 0.

### 2. `src/Backfill/BackfillWorker.php` — quota-sliced offset_id cursor loop

`__construct(int $requestBudget, int $floodCapSeconds = 3600, ?callable $sleep = null)` (null → real `sleep()`). `process(string $peer, callable $fetch, callable $onBatch, int $offsetId = 0): array{messages, requests, offset_id, status, reason}` — pure; queue stays OUT (dead-letter persistence is `FetchQueue::fail` called by the command layer; process just reports `reason`: `flood_wait` | `fetch_failed` | `request_budget_exhausted` | null).

Ported rules (from `Sync/BackfillWorker::run` + quotaSlice, decoupled from amphp/SQL):

- **Headroom rule (docblock in both classes):** a run may start at most `quotaSlice(budget, 1)` = `intdiv(budget, 2)` requests — ≥ 50% of the per-run request budget always reserved for live traffic; budget 1 → zero fetches.
- **Budget = requests** (per-message cost 0): every `$fetch` invocation counts — success, FLOOD_WAIT or generic failure. `limit = min(remaining budget, 100)`. No overrun, ever.
- **FLOOD_WAIT:** catches teleproto `FloodWaitException` → `sleep(min($e->seconds, floodCapSeconds))` via injected sleeper → retry SAME offset.
- **Failures:** 5 CONSECUTIVE failed fetches (flood or generic) → status `dead` (no sleep on the killing attempt); one success resets the streak. Fork's "fail → return, give quota back" becomes in-run retry with budget still ticking.
- **Cursor:** pages DESC (getHistory order); next offset = oldest id of the batch; `$offsetId` param = caller's resume cursor; returned `offset_id` = resume point.
- **Empty page → `done`.**

### 3. Tests (14) — `tests/Backfill/*` + `tests/Support/{ScriptedFetch,SleepRecorder}.php`

FetchQueue (6): fork headroom math table, FIFO, idempotent push, fail→re-queue→5th-kill→dead-letter w/ reason + counts, no zombie revival, failed peer re-queued at back. Worker (8): 3-page full fill (cursor + limit assertions), flood mid-way (`[3600, 30]` sleeps = min/cap, same-offset retry, budget consumed), permanent generic failure → dead after exactly 5 attempts / no sleep / no onBatch, cursor resume from 900, budget stop at exactly `intdiv(8,2)=4` requests with no 5th call, budget-of-1 fetches nothing (headroom), 5 consecutive floods → dead, flood retries exhaust budget without overrun.

## Notes for Task 4/6 (command layer)

`telegram-client:backfill` should: `push` peers → `pop` → `process(peer, fn => scope getHistory, ingest batch, persistedCursor)` → `done` → `complete` + persist `offset_id` for resume; `dead` → `fail(peer, reason)` (queue kills after 5 across runs); `budget` → leave queued, next run resumes from returned cursor. Config: `requestBudget` from `config('telegram-client.backfill.request_budget')`, flood cap from `backfill.flood_cap_seconds`.

# P3 Task 4 Report — Daemon + AccountWorker + BackfillCommand + docs (phase final)

**Base:** master @ccebb0d (on top of Tasks 1/2/3/5)
**Gates:** phpunit **OK (204 tests, 9789 assertions — 181 baseline + 23 new; 4 skips = Task 3's designed live-redis skips)** · phpstan level 5 + disallowed-calls **[OK] No errors** · zero `preg_` in src/ + config/ (grep + phpstan). No live-network tests required (plan Global Constraints: offline canned fixtures; live wire stays behind teleproto's TELEPROTO_LIVE tri-state flag).

## Files

| File | Role |
| --- | --- |
| `src/Daemon/AccountPoller.php` | `UpdatePollerService` subclass with supervision policy: only stop()-won races break internally; FloodWait / DcMigration / everything else propagates to the worker. (The stock poller backs off internally forever — opaque to a supervisor.) |
| `src/Daemon/AccountWorker.php` | Per-account supervised poll loop. `__construct(accountConfig {account_id, session_string, dc?, api_id?, api_hash?}, ?scopeFactory, ?resumeState, ?sleep)`; `run(UpdateSinkInterface $sink, ?callable $shouldStop): void`. FloodWait → interruptible clamped sleep in 1s stop-responsive chunks (sleeper injectable); DcMigration → factory rebuild at `getDcId()` resuming the adopted window; unexpected → 3 consecutive strikes **without observable progress** (cursor advanced = streak reset) → rethrow. Difference cursor survives everything: `lastSequenceState()` out, ctor `resumeState` in. Stop-responsiveness: a stop-aware scope decorator (anonymous `UserAccountScope` subclass) pre-flights `shouldStop` on every RPC, stops the poller, and aborts in-flight via the poller's break path. Default scope factory = `buildLiveScope()` (public static): `SessionData::importString` + DC override + TELEGRAM_* env fallback — network guarded by teleproto's tri-state live flag. |
| `src/Daemon/WorkerInterface.php` | `run(?callable $shouldStop): void` — what Daemon supervises; the host bootstrap binds AccountWorker + its sink into it (docs/bus.md), keeping redis OUT of the daemon. |
| `src/Daemon/Daemon.php` | Sequential supervisor: round-robin `TICK_SECONDS=30` slices per account; failure isolation on a `BACKOFF_LADDER = [2,5,15,60]` (cap) ladder while others continue; healthy shift resets failures; pcntl SIGTERM/SIGINT graceful (function_exists-guarded) or `stop()` → exit 0; **all-fail = every account has climbed the whole ladder (≥4 consecutive failures each) → exit 1** for the init system; sleeps to earliest cooldown (interruptible, injected clock/sleeper for tests). Empty account list → clean exit 0. |
| `src/Console/BackfillCommand.php` | `telegram-client:backfill {--account=} {--peer=*} {--budget=25}`: FetchQueue + Task-5 BackfillWorker over a real scope; pages stored via the P2 ingest surface — plain `ingest` (messages.messages), **not** `ingestResponse` (route-dedup would collapse distinct pages). Prints per-peer `{messages, requests, offset_id, status}` + totals. Container seams `SCOPE_RESOLVER_KEY` / `INGESTER_KEY` (string keys, mirrors IngestCommand's CONSUMER_CLASS discipline). **v1 report-only** (cursor/queue not persisted — documented in code + docs). |
| `src/Backfill/FetchQueue.php` (+1 test) | Consumer-driven addition: `requeue(peer)` — deferred-claim primitive (budget stop keeps the peer at the FRONT without attempt accounting; `push()` is idempotent so it can't do this). Same justification as Task 2's ArrayRedis fix: the command layer needed the fork's deferred semantics. |
| `config/telegram-client.php` | `daemon.accounts` registry (shared by daemon + backfill session resolution; sessions = credentials → env), `backfill.request_budget` / `flood_cap_seconds`. |
| `src/TelegramClientServiceProvider.php` | Registers BackfillCommand; default bindings for both command seams (scope resolver reads `daemon.accounts`; default batch writer ingests pages with per-batch try/catch — a failing batch never kills the fetch loop in v1). **M1 carry (P2 ledger)**: provider docblock documents the naming deviation decision — single root provider kept on purpose (shared bindings, single config surface, composer extra.laravel.providers parity), with register() named as the split seam. |
| `docs/bus.md` (new) | Stream schema table + entry triple, prefix-only routes + reload protocol, ingest command, daemon bootstrap (bus wiring snippet: RedisStreamSink per account via WorkerInterface adapter), systemd unit (Restart=on-failure for the all-fail exit 1), backfill semantics + v1 report-only note. |
| `docs/ingest.md` | **M2 carry (P2 ledger)**: sidecar sentence — v227 peers carry ids only; user/chat/channel entities arrive via difference vectors; `ingest()` handles them as delivered. |
| `CHANGELOG.md` | Unreleased += Bus/Daemon/Backfill section (all of Phase 3, phase-final). |
| `tests/Daemon/{AccountWorkerTest,DaemonTest}.php`, `tests/Support/FakeUserScope.php`, `tests/Console/BackfillCommandTest.php` | 23 new tests (11 worker + 7 supervisor + 1 queue + 7 command... exact split: AccountWorkerTest 11, DaemonTest 7, FetchQueueTest +1, BackfillCommandTest 7 — 26 total minus... net suite delta 23; three replaced-nothing new files). |

## Tests (offline only)

- **AccountWorker (11):** config validation; canned differenceEmpty + shouldStop flip → clean return + cursor (`params.pts` sent from resume state); slices → sink streaming until stop; flood → `[1,1,1]` chunk sleeps + rebuild + resume-from-cursor; 300s flood aborted by shouldStop after one chunk; DC migration → factory re-invoked with `dc:4` and polling resumed; 3-strike rethrow (kaboom 3); progress-between-failures streak reset (kaboom 4 escapes only after the post-progress triple). Script-splicing factory: rebuilt scopes RESUME the step list where the dead one stopped.
- **Daemon (7):** no accounts → 0; missing account_id rejected; clean stop → 0 (1 tick); failure isolation (sick account re-ticks only after its cooldown; healthy account runs 3 shifts; exit 0; lastErrors per account); backoff ladder (lone failing account: one tick per rung, cooldowns slept in 1s chunks = 2+5+15, exit 1 at the top rung); real SIGTERM mid-tick → graceful 0 (pcntl-guarded skip); config validation.
- **BackfillCommand (7):** arg validation; full run per-peer + total lines; pages land in sqlite truth (`tl_message` anchor + `tl_message_message` instance under account 7); budget 6 → 3 requests (headroom) leaves the peer queued (requeue); permanent failure → dead after 5 in-run attempts; flood slept through (0s flood) + done; artisan registration.
- **FetchQueue (+1):** requeue restores a claim without attempt accounting, front position, idempotent.

## Bugs found while testing (both fixed test-first)

1. **Budget stop dropped the peer** — the popped peer was never requeued (`queued: 0`); added `FetchQueue::requeue()`.
2. **Stale facade poisoning (cross-suite):** a torn-down testbench app left on the Event facade made teleproto's gap/resync `Event::dispatch` throw `BindingResolutionException` mid-poll in later plain-PHP tests. The worker is CORRECT to treat that as a supervised failure (broken container = real error in a host app), so the fix lives in the tests: `AccountWorkerTest::setUp` pins `Facade::setFacadeApplication(null)` — the worker's intended standalone environment.

## Decisions worth recording

- **Supervision boundary:** the stock poller's internal infinite backoff is right for standalone use but opaque for a daemon; `AccountPoller` moves the policy up (everything rethrows; only stop-races break) so AccountWorker owns the failure semantics the plan demands. FloodWait is handled at the WORKER level (clamped, interruptible, injectable sleeper) — same net behavior, supervisor-visible, offline-testable.
- **Stop mechanism:** pollUser blocks with no external tick; the only clean exit is `stop()`. The scope decorator pre-flights `shouldStop` per RPC (calls `$poller->stop()`, then throws — the poller's break path sees `running=false` and returns normally). Worst-case stop latency: one RPC + one 1s poller cadence sleep.
- **"Unexpected × 3 consecutive"**: consecutive = no cursor progress between attempts (pts/date/qts/seq all flat). A quiet account that dies twice years apart does NOT strike out on a technicality.
- **Daemon ↔ sink decoupling:** the daemon holds no redis; `WorkerInterface` is the seam where the host binds `AccountWorker` + `RedisStreamSink` (docs/bus.md snippet). The backfill scope resolver shares the `daemon.accounts` registry — one account config surface.
- **Backfill ≠ ingestResponse:** history pages are one-shot fetches; route-dedup keys would collapse distinct pages with identical shapes — pages go through plain `ingest` (still idempotent by content).
- **Backfill dead-lettering:** a 'dead' run is `fail()`ed (attempts++ for the cross-run ledger) and skipped for the rest of the run (purged on re-pop) — re-running a dead peer 5× inside one invocation would burn 25 requests for nothing.

## Skipped / notes

- E2E live-credential gate: N/A by design this task (plan constraint: offline canned fixtures; live wire behind TELEPROTO_LIVE). The suite's 4 skips are Task 3's live-redis adapter tests (skip-if-unreachable), unchanged.
- `docs/bus.md` systemd unit references a host-provided `telegram-client:daemon` command — the daemon is a class, not a shipped command, on purpose (bus wiring is app-owned); the doc says so inline.
- `.superpowers/p3/task-{1,2,3}-report.md` remain untracked (prior tasks' choice); this report follows suit.

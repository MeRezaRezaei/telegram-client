# Phase 3: Redis Bus, Daemon & Backfill — Implementation Plan

> **For agentic workers:** REQUIRED SUB-SKILL: superpowers:subagent-driven-development. Groups in label order; same-group tasks MAY run parallel (disjoint files).

**Goal:** Live update flow end-to-end: teleproto poller → Redis Streams (multi-account) → hot-reloadable routing → `telegram-client:ingest` consumer → P2 Postgres truth; plus a standalone multi-account daemon and a quota-aware history backfill worker. Ports the owner's fork designs (feat/laravel-mtproto-platform EventBus/SyncLoop/BackfillWorker, sdd/sync quota math) onto teleproto+Laravel primitives.

**Architecture:** Sync PHP (roadmap: no event-loop). Daemon = supervisor loop over configured accounts; each account runs teleproto UpdatePollerService with a RedisStreamSink emitting to `tg:stream:updates` (stream entries: {account_id, update json, ts}); consumer group `telegram-client` reads → routes (hot-reload map read from a Redis hash, changed via config channel pub/sub → routes applied without restart) → TelegramClient::ingest → UpdateStored + routed events. Backfill = per-peer offset cursor loop with quota accounting (FloodWait-aware, 50% headroom rule from fork), dead-letter stream after 5 attempts. illuminate/redis + predis (no ext-phpredis requirement; works with either).

**Tech Stack:** teleproto, illuminate/redis, predis/predis, pcntl (daemon signals), PHPUnit+Testbench (redis faked via in-memory double where possible; real-redis tests marked skipped-if-unavailable env TELEGRAM_CLIENT_REDIS).

**Spec:** roadmap P3 + contracts. Port sources (read-only reference): /home/me/Documents/projects/MadelineProto/src/{Events/EventBus.php,Sync/*.php}, bin/madeline-daemon.

## Global Constraints

- Zero preg_, strict_types, MIT, arrays-in/models-out, account_id tenancy everywhere.
- No Revolt/amphp (port designs, not runtime).
- Redis via illuminate RedisManager (predis fallback when ext absent — local dev has NO phpredis: use predis).
- Live-network tests only behind env flags; offline = canned fixtures + in-memory redis double implementing the subset (xAdd/xReadGroup/xAdd-dl, hGetAll, publish/subscribe via loopback echo).
- Gates per task: phpunit, phpstan [OK].

## File Structure

```
src/Bus/RedisStreamSink.php        UpdateSinkInterface → xAdd
src/Bus/StreamSchema.php           consts: stream/key/group/dl names, entry codec (zero drift)
src/Bus/RouteTable.php             hash-backed route map (pattern → target stream/event)
src/Bus/HotReloadRouter.php        applies RouteTable changes live (psubscribe signal)
src/Bus/IngestConsumer.php         group reader → route match → ingest + dispatch
src/Console/IngestCommand.php      telegram-client:ingest (daemon-mode loop + once)
src/Console/BackfillCommand.php    telegram-client:backfill
src/Daemon/Daemon.php              account supervisor loop, signals, restart-on-fail
src/Daemon/AccountWorker.php       one account: poller + sink + keepalive (teleproto)
src/Backfill/BackfillWorker.php    port quota-slicing math + cursor loop
src/Backfill/FetchQueue.php        peer queue + attempts + dead-letter
config/telegram-client.php         += bus/daemon/backfill sections
```

---

### Task 1 (G1): Stream schema + RedisStreamSink (+ in-memory redis double)

**Produces:** `StreamSchema` consts + `encode/decode(array): string` entry codec; `RedisStreamSink::handle(update, source): bool` xAdds {account_id (derived from source string — numeric = user account; else bot token id hash), update, ts} returns true; `tests/Support/ArrayRedis.php` in-memory double implementing used subset (xAdd, xReadGroup, xAck, hGetAll, hSet, publish/subscribe hookable) — the test substrate for the whole phase. Tests: codec roundtrip, sink writes entry with right account derivation (numeric source vs bot token), handle() true.

### Task 5 (G1, parallel — NO redis dep): BackfillWorker + FetchQueue port

**Produces:** `FetchQueue` (peer list, attempts, dead-letter list, pop/push/fail); `BackfillWorker::process(string $peer, UserAccountScope $scope, callable $onBatch): int` — getHistory offset_id cursor loop porting fork quota math: per-run request budget (config), FloodWaitException → sleep(min(seconds, cap)) consuming budget, 5 attempts → dead-letter, 50% headroom rule (budget/2 target). All pure + injected call() callable — zero redis. Tests: canned history sequences (full fill / flood mid-way / permanent failure → DL / cursor resume).

### Task 2 (G2): RouteTable + HotReloadRouter (+consumer)

**Produces:** RouteTable (hash get/set/all; pattern match by str_starts_with on '_' constructor — no regex); HotReloadRouter subscribing to `tg:bus:reload` channel → re-read table, callback onRoutesChanged; IngestConsumer::consumeOnce(): array{processed:int} — xReadGroup → route (default: ingest + UpdateStored; target stream: xAdd to target then ack) → ack; poison handler (decode fail → DL stream + ack). Tests with ArrayRedis: default path ingests (sqlite memory via IngestTestCase), target path forwards, reload signal swaps routes live, poison → DL.

### Task 3 (G2, parallel w/ 2 — files disjoint): IngestCommand + config + provider wiring

**Produces:** `telegram-client:ingest` (--once | --max | daemon default loop with pcntl signals graceful), config sections (bus: stream/group/reload-channel; redis connection name), provider registers command. Tests: command instantiates, --once path via ArrayRedis binding swap (container->instance(RedisManager...)) processes 1 entry end-to-end.

### Task 4 (G3): Daemon + AccountWorker + docs

**Produces:** AccountWorker (per-account: TeleprotoClient from config (session string per account), UpdatePollerService with RedisStreamSink, ping keepalive inherited from teleproto Client, exceptions → FloodWait-aware interruptible sleep + DcMigration → re-init at DC); Daemon (loop accounts, sequential tick each, SIGTERM/SIGINT graceful, per-account failure isolation + backoff restart, run() returns exit code; systemd unit example in docs). Integration test: Daemon with fake worker factory (no network) — signal-sim, account failure isolation. Docs: docs/bus.md (stream schema, routes, reload protocol, daemon run, systemd), CHANGELOG update. M1/M2 from P2 ledger: provider naming note + docs/ingest.md sidecar sentence.

## Parallel Dispatch Summary
G1: 1 ∥ 5 · G2: 2 ∥ 3 · G3: 4 (+ phase-final review).

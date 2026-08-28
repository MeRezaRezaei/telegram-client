# Phase 3 — Task 2 Report: RouteTable + HotReloadRouter + IngestConsumer

**Commit:** `c017bd0` `feat(bus): route table, hot-reload router, ingest consumer with DL`
**Branch:** master (on top of `6e4cee7`) · **Approach:** TDD (tests red first, then green)

## Delivered

| File | Role |
| --- | --- |
| `src/Bus/RouteTable.php` | Hash-backed route map on `ROUTES_KEY`. `all()` (hgetall), `set(pattern, target)` (hset, overwrite = retarget), `match(update): ?string` — first pattern in hash order where `str_starts_with(update['_'] ?? '', trimmed)` wins; a single trailing `*` is stripped to a prefix (bare `*` = catch-all incl. no-`_` updates); string functions only, zero regex. Empty table / no hit → `null` (default ingest path). |
| `src/Bus/HotReloadRouter.php` | Push style: `listen()` subscribes `RELOAD_CHANNEL` → every ping re-reads the table and fires the constructor `onReload(freshTable)` callback. Poll style: `refresh(): array` re-reads + caches + returns (no callback — quiet for pollers). Constructor snapshots the current table; `routes()` exposes the cache. Callable normalized to `Closure` via first-class callable syntax. |
| `src/Bus/IngestConsumer.php` | `consumeOnce(): array{processed:int, forwarded:int}` — `xreadgroup(GROUP, CONSUMER, [STREAM => 10])` → per entry: decode (`StreamSchema`) · poison (`JsonException`/`InvalidArgumentException`) → xadd original fields verbatim to `DL` + xack + counted processed; route match → xadd original fields verbatim to target + `forwarded++`; else `TelegramClient::ingest(update, account_id)` + optional `onStored(root, account_id)` hook; xack. Every handled entry is acked before the batch ends. |
| `tests/Bus/RouteTableTest.php` (7) | Empty→null, set/all ordering, retarget overwrite, prefix semantics (with/without `*`), first-pattern-wins, bare-`*` catch-all. |
| `tests/Bus/HotReloadRouterTest.php` (4) | Constructor snapshot, refresh re-read (stale until refreshed), publish loopback fires onReload with fresh table, no-listener publish → 0. |
| `tests/Bus/IngestConsumerTest.php` (4) | Boots P2 ingest surface (`IngestTestCase` + `RunsMigrations`, sqlite :memory:). End-to-end: 3 seeded entries (user update via `RedisStreamSink`, `updateNewMessage*`-routed, raw poison) → `processed:3, forwarded:1`, sqlite `TlUserUser` row under account 7, target stream carries the verbatim payload, DL has the poison, group pending empty after ('0' read), second pass 0/0. `onStored` fires for default path only (not forwarded/poison). Reload live-swap: consume → retarget + publish + refresh → update arriving after the swap lands on the new target, first target untouched. |
| `tests/Support/ArrayRedis.php` (fix) | **Substrate bug found by the new tests:** the `>` branch computed fresh entries as `entries − pending`, so **acked entries were redelivered** — contradicting the double's own docblock ("delivers never-delivered entries exactly once per group") and real XREADGROUP (group last-delivered-id is ack-independent). Added per-group `delivered` tracking so `>` never redelivers; `0`-id pending reads and `xack` semantics unchanged. Regression test added to `tests/Bus/ArrayRedisTest.php` (incl. cross-group isolation). No pre-existing test relied on the old behavior (verified red→green). File is Task-1 owned but the documented contract demanded the fix; flagged here for the phase ledger. |

## Decisions worth recording

- **Match semantics per spec:** every pattern matches by prefix after trimming ONE trailing `*` — a star-less pattern (`user`) therefore also prefixes (`userFull` matches). "Trailing-`*` ONLY" means no other wildcard positions are honored (a `*` anywhere else is matched literally via string compare).
- **Poison counts as processed** (handled = acked), per task text "xadd DL + xack + continue (count)". e2e expectation: `processed:3, forwarded:1`.
- **Forward/DL preserve fields verbatim** (account_id/update/ts untouched) — zero drift, DL re-post and target fan-in keep tenancy metadata. New error/reason fields were deliberately NOT added (keeps entries byte-identical; Task 3/4 can enrich if wanted).
- **Consumer reads RouteTable fresh per entry** — routing is hot by construction; the router's pub/sub is for push-style observers (daemon/Task 4), the test proves both paths.
- `onReload`/`onStored` normalized to `Closure` (typed properties can't hold bare callables).

## Gates

- **phpunit:** `OK (170 tests, 9705 assertions)` — 154 baseline + 16 new (7 RouteTable + 4 HotReloadRouter + 4 IngestConsumer + 1 ArrayRedis regression). No live-network tests required (plan: live only behind env flags; none added).
- **phpstan** (`composer analyse`, level 5 + disallowed-calls incl. `preg_*` ban): `[OK] No errors`.
- Zero `preg_` in src/ (phpstan-enforced); strict_types everywhere.

## Scope discipline

Only owned files touched + the one substrate fix above. Commands/provider/config untouched (parallel Task 3's files). `.superpowers/p3/task-1-report.md` left as-is (untracked, belongs to Task 1).

# P3 Task 3 Report — IngestCommand + LaravelRedisAdapter + config/provider wiring

**Base:** master @6e4cee7 (landed on top of Task 2's c017bd0, which arrived mid-flight)
**Gates:** phpunit 181 tests / 9753 assertions OK (154 baseline + Task 2's parallel tests + 11 mine, coexisting); phpstan level 5 + disallowed-calls [OK]; zero `preg_` in src/ + config/. 4 live-redis adapter tests run against a local server (`TELEGRAM_CLIENT_REDIS_TEST_PORT=16379`) and skip cleanly when no usable redis is reachable.

## Files

| File | Change |
| --- | --- |
| `config/telegram-client.php` | New `bus` section: `stream`/`group`/`reload_channel` referenced from `StreamSchema` consts (zero drift), `connection => 'default'`, `redis_client => env('TELEGRAM_CLIENT_REDIS', 'predis')`. |
| `src/Bus/LaravelRedisAdapter.php` | New thin adapter: `RedisConnectionContract` over an illuminate/redis connection. |
| `src/Console/IngestCommand.php` | New `telegram-client:ingest {--once} {--max=0}` shell. |
| `src/TelegramClientServiceProvider.php` | `RedisConnectionContract` binding (RedisManager → adapter, loud `RuntimeException` when `app('redis')` is absent) + `IngestCommand` registration. |
| `tests/Console/IngestCommandTest.php` | 7 tests: config sourcing, `--once`, `--max` loop, real-SIGTERM graceful stop, no-redis guard (bare container), RedisManager→adapter wrap, artisan registration + CONSUMER_CLASS key. |
| `tests/Bus/LaravelRedisAdapterTest.php` | 4 live-redis tests (skip-if-unusable): full contract round-trip per driver + subscribe refusal. |

## Design notes

- **Parallel-landing discipline**: the command references the consumer only through `IngestCommand::CONSUMER_CLASS` (FQCN string literal). Tests bind a `FakeIngestConsumer` at that container key; no compile-time reference existed until Task 2's class landed (mid-task) — phpstan now resolves `make()` through the const to the real `consumeOnce(): array{processed, forwarded}` shape with no textual coupling.
- **Command semantics**: `--once` → single batch + `processed N entries`; default loop → consumeOnce batches until `--max` (0 = unlimited) or pcntl SIGTERM/SIGINT, checked after the current batch, exit 0 always; 100ms `usleep` idle backoff on empty batches; Windows note when pcntl is absent and the loop is unbounded. (First cut accidentally consumed a probe batch before branching — caught by the `--max=3 → 3 calls` test, fixed.)
- **Provider**: contract closure wraps `app('redis')->connection(config bus.connection)` when the service exists (testbench binds `redis` by default — discovered empirically; a password-protected local 6379 surfaced it). Otherwise it throws a guiding `RuntimeException` rather than silently faking — tests swap in `ArrayRedis` themselves.

## predis ↔ phpredis mapping (verified against live redis 7.0, both drivers byte-identical)

| Contract | predis | phpredis |
| --- | --- | --- |
| `xadd(stream, id, fields)` | `xadd(stream, fields, id)` — **fields/id swapped** vs phpredis | `xadd(stream, id, fields)` |
| `xreadgroup(group, consumer, [stream => count], minId)` | `xreadgroup(group, consumer, count, null, false, ...keys, ...ids)` — variadic keys-then-ids; RESP2 returns list-of-pairs `[stream, [[id, [f1, v1, ...]]]]` → adapter re-pairs fields and rebuilds the map | `xreadgroup(group, consumer, [stream => id], count)` — already returns the contract map shape |
| `xack(stream, group, ids)` | ids must be **spread** (plain XADD-style command) | ids passed as one array |
| `hgetall/hset/publish/del` | identical signatures — straight passthrough via `Connection::command()` | identical (PhpRedisConnection lowercases method names anyway) |
| `llen(key)` | `TYPE` returns string → dispatch `xlen`/`hlen`/`llen` (plain LLEN throws WRONGTYPE on streams/hashes — bit me in a probe) | `TYPE` returns int constant (6=stream, 5=hash) → same dispatch |
| `subscribe` | **not implemented** — the synchronous loopback-echo semantic only exists on ArrayRedis; throws `LogicException` pointing real pub/sub at the daemon (Task 4) | same |

All calls go through `Connection::command($method, $params)` — one canonical passthrough that sidesteps `@mixin \Redis` magic-method ambiguity for phpstan.

## Deviations / notes for the phase ledger

- `tests/Bus/LaravelRedisAdapterTest.php` is an extra file beyond the brief's ownership list (the adapter needed its own coverage); filename disjoint from Tasks 1/2.
- Live tests default to `127.0.0.1:6379`, overridable via `TELEGRAM_CLIENT_REDIS_TEST_HOST/_PORT`; they PING-probe and skip when the server is unreachable *or unusable* (e.g. NOAUTH) unless the host was set explicitly, in which case they fail loudly.
- E2E live-credential gate from teleproto doesn't apply here; nearest equivalent (live-redis dual-driver round-trip) was executed and is green.

# Phase 3 — Task 1 Report: Stream Schema + RedisStreamSink (+ in-memory Redis double)

**Commit:** `82876d5` `feat(bus): stream schema, redis connection contract + array double, stream sink`
**Branch:** master · **Approach:** TDD (tests written first, red → green)

## Delivered

| File | Role |
| --- | --- |
| `src/Bus/StreamSchema.php` | Wire-name consts (`STREAM` `tg:stream:updates`, `GROUP` `telegram-client`, `CONSUMER` `ingest-1`, `DL` `tg:stream:dead-letter`, `RELOAD_CHANNEL` `tg:bus:reload`, `ROUTES_KEY` `tg:bus:routes`) + `encode()/decode()` entry codec — canonical JSON with stable key order `account_id,update,ts` (byte-identical output regardless of input key order). |
| `src/Bus/RedisConnectionContract.php` | The Redis subset the whole phase consumes: `xadd`, `xreadgroup` (`>` new / concrete-id pending), `xack`, `hgetall`, `hset`, `publish`, `subscribe`, `del`, `llen`. Laravel-agnostic plain interface; a later adapter wraps Illuminate RedisManager (predis/phpredis both satisfy the signatures) — not this task. |
| `src/Bus/RedisStreamSink.php` | `UpdateSinkInterface` (teleproto contract read first: `handle(array $update, ?string $source): bool`, backpressure semantics honored) → `xadd` `{account_id, update: StreamSchema::encode(...), ts}` always `true`. Static `accountIdFor(?string)`: numeric → user id; `id:hash` bot token → id part (string functions only); null/empty/non-numeric → 0. |
| `tests/Support/ArrayRedis.php` | In-memory double implementing the contract — stream store with monotonic auto-ids (`ms-seq`, explicit ids advance the high-water mark), group pending tracking (per-consumer, `>` exactly-once per group), ack counts, hash store, pub/sub via loopback echo (injected callables), `del`/`llen`. Exposes `streamEntries()` inspection helper. Plain class — does NOT extend RedisManager. |
| `tests/Bus/*` (3 files, 25 tests) | Codec roundtrip + stable key order + malformed decode throws (`JsonException` for bad JSON, `InvalidArgumentException` for non-canonical shapes); sink stream/fields/ts assertions, multi-account entries, `accountIdFor` cases; ArrayRedis subset behaviors (auto-id monotonicity, `>`→pending→ack lifecycle, hash roundtrip, pub/sub echo + receiver count, del/llen). |

## Gates

- **phpunit:** 140 tests, 9,581 assertions, 0 failures/deprecations in this task's scope (115 pre-existing + 25 new). Full-suite run currently also picks up the **parallel Task 5 worker's in-flight `tests/Backfill/`** (their `src/Backfill/` not yet written → expected `Class not found` errors; not this task's scope). Verified green isolated: `phpunit tests/Bus tests/Ingest tests/Schema`.
- **phpstan** (`composer analyse`, level 5 + disallowed-calls): `[OK] No errors`.
- **Zero `preg_` in src/:** clean (phpstan rule + manual scan). Account-id parsing uses `ctype_digit`/`strpos`/`substr`.
- **strict_types:** all new files.

## Notes / coordination

- `tests/Support/ScriptedFetch.php` appeared mid-commit — it belongs to the parallel Task 5 worker (tests/Support is a shared dir); my commit was redone to exclude it; file left intact on disk.
- One deliberate PHPUnit 11 fix during the task: data providers converted from `@dataProvider` docblocks to `#[DataProvider]` attributes (doc-comment metadata is deprecated, would break on PHPUnit 12).
- Design choice for consumers (Task 2): stream entry field `update` carries the full `StreamSchema` JSON (self-contained `account_id`+`ts` inside), so poison recovery / DL re-post / target forwarding never lose tenancy metadata.

**Next:** Task 2 (G2) can bind `ArrayRedis` to `RedisConnectionContract` and build RouteTable/HotReloadRouter/IngestConsumer on this substrate.

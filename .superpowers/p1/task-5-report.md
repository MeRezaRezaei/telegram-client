# Task 5 — Wave 2 fix: loadable generated layer (hydrate totality)

Date: 2026-08-28. Branch master. Fixes diagnosed root causes F1–F3.

## F1 — DTO hydration totality (DtoGenerator)
- `abstractBase()` now emits a default `public const TL_FLAG_BITS = []` on every union base plus a `hydrate()` that, after resolving `$class` from `DISPATCH`, reflects `$class::__construct()` params and, for each param absent from the payload:
  - if `$class::TL_FLAG_BITS[$name]` exists → `$payload[$name] = (bool) ((int)($payload[$flagWord] ?? 0) >> $bit & 1)`;
  - else if the snake_case wire key (`tlWireKey()`, regex-free camel→snake) is present → copied to the camelCase key;
  - else → `null`.
- `ctorData()` emits `public const TL_FLAG_BITS = ['self' => ['flags', 10], ...]` (camelCase param => [flag word, bit]) for every `flags.N?true` param.
- Root causes found beyond the diagnosis, both fixed in the generator:
  1. spatie `Data::from()` does NOT map snake_case payload keys to camelCase constructor params (verified against `DataFromArrayResolver`) — hence the wire-key copy in `hydrate()`.
  2. `propType()` computed but never applied the `?` nullable prefix to conditional scalars (`flags.N?string` etc. emitted as non-nullable `string`), so null-filling TypeError'd. Conditional scalar/true params are now `?int`/`?string`/`?bool`/`?float`.
- Regenerated with `php bin/regenerate`: manifest pin unchanged (`f7b5c70f88df`), `schema-manifest.json` byte-identical (DTO contents are not hashed, as expected).

## F2 — stale golden
- `tests/Schema/DtoGeneratorTest::test_abstract_base_dispatch` expectation updated `fromWire` → `hydrate` (minimal heredoc/string change).

## F3 — v227 payload in load test
- `tests/Schema/GeneratedLoadTest` user payload simplified to `['_'=>'user','flags'=>0,'flags2'=>0,'id'=>777,'access_hash'=>1,'first_name'=>'Ada']`, asserts `id === 777`, `firstName === 'Ada'`, and `self === false` (exercises the TL_FLAG_BITS path); userEmpty case kept.

## Gates
- `rm -rf .phpunit.cache; vendor/bin/phpunit` → OK (76 tests, 9304 assertions)
- `composer analyse` (phpstan level 5 + disallowed-calls) → [OK] No errors
- `grep -rn 'preg_' src/` → 0 hits
- E2E n/a for this repo (no live gate here; nothing network-touching changed).

## Notes
- The `generated/README.md` ship-dial count 113→112 line predates this wave (earlier uncommitted dial work in the tree); ShipDialGoldenTest is green against the current dial.
- Commit includes all previously uncommitted work: testbench bootstrap (`tests/bootstrap.php`, `tests/Schema/TestCase.php`, `phpunit.xml.dist`, `composer.json` autoload mapping), the hydrate rename, and the regenerated tree.

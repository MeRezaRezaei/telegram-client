# P2 Task 4 Report — Route Idempotency Primitives

**Status:** DONE — commit `38d6f89` "feat(ingest): route idempotency primitives"
**Scope owned:** `src/Ingest/RouteIdempotency.php`, `tests/Ingest/RouteIdempotencyTest.php` (nothing else touched; UpdateIngestor untouched per parallel-T3 constraint)

## What shipped

- `RouteIdempotency::seen(method, routeKey, accountId): bool` / `mark(..., tlId): void` against the **generated off-dial route tables** (`generated/migrations/2026_08_28_900633_create_tl_route_tables.php`, 750 `tl_route_*` tables incl. `tl_route_messages_get_history`; shape `id` uuid PK + `route_id` uuid unique + timestamps).
  - `route_id` = deterministic uuid5(fixed NS, `method|account|routeKey`) — uniqueness IS the dedup; account scoping baked into the key (verified: same route under account 8 unseen after account 7 mark, 2 rows after both).
  - `mark` stores `$tlId` as the row PK (pointer to the stored response instance); re-mark is a no-op (row count stable); concurrent-mark race handled via unique-violation catch that re-checks and rethrows anything else (missing table stays loud).
- `RouteIdempotency::migrationPaths(): array` — off-dial loading following `UpdateIngestor::entityMigrationPaths()` mechanism; test migrates it after `IngestTestCase`'s dial pass.
- `keyFor(method, params): string` — deterministic sorted-JSON (recursive `ksort SORT_STRING`), method-namespaced, order-insensitive at any depth; `JSON_PRESERVE_ZERO_FRACTION`; throws on unencodable input.
- `isUpdatePayload(payload): bool` — `str_starts_with('_', 'update')` (covers `update*` + `updates`/`updatesCombined` containers); truth-table tested: updateNewMessage/updateShort/updates/updatesCombined true; messages.messages/messages.channelMessages/user/no-constructor false.
- `tableFor(method)` uses generator's `Naming::snake` — identical naming to the generated tables (no drift possible).

## TDD + gates

- Test written first (7 tests); all green.
- `composer test`: **OK, 95 tests / 9383 assertions** (88 baseline + T4's 7 + parallel T3's tests coexisting).
- `composer analyse`: **[OK]** — one phpstan round: `exists()` remembered-false across the catch; fixed by extracting `@phpstan-impure routeExists()` helper (genuinely impure: DB state changes between calls).
- Zero `preg_` in owned files (string functions only).

## Notes for T5 wiring

- Caller-level no-op: `if (!$routes->seen($m,$k,$a)) { ingest(); $routes->mark($m,$k,$a,(string)$model->id); }` — primitive semantics asserted here; wiring is T5's.
- Update-kind payloads: branch on `isUpdatePayload` BEFORE route logic (always instance path).
- Methods with generic/vector returns have NO route table (generator skips) — `seen`/`mark` will throw loudly on them; T5 should only route methods with a stable single return type.

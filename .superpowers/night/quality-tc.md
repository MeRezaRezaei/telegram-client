# Night quality-tc — verdict-blocking prune fix (telegram-client)

Date: 2026-08-29 · Branch: master (on 2049e41) · Gates: `vendor/bin/phpunit` **OK (334 tests, 10512 assertions, 5 pre-existing live/PG skips)** · `composer analyse` (phpstan L5 + disallowed-calls) **[OK]** · `grep preg_ src/` **0 hits**.

## Reviewer finding (verdict-blocking), reproduced first

`TelegramVault::findEntries` capped every listing at `SEARCH_LIMIT=100` (messages.search + getHistory top-up), and `Pruner::prune` rode `findMessagesByName('')` — so the GC's inventory silently stopped at the newest ~100 channel messages. Orphans older than that were invisible to every prune forever: at ≥50 MB backup sets (>100 chunks), prune's entire purpose leaked. TDD red run reproduced it exactly: 250-message harness → `scanned == 100`.

## Fix

1. **`TelegramVault::listAllEntries(): array`** (public, `src/Backup/TelegramVault.php`) — uncapped `messages.getHistory` walk via `offset_id` cursor: pages of `LIST_PAGE_SIZE=100`, cursor = oldest id of the last page, terminate on the empty page. Same entry shape as `findMessagesByName()` (`{id: string, name: string}`, newest first). Two pathological aborts **throw** `RuntimeException` recommending manual review — never silent truncation: raw fetched rows > `LIST_HARD_CAP=10000`, and pagination making no forward progress at a cursor (dedupe by id keeps the result honest against repeated rows).
2. New api-map key **`listHistoryPage(peer, limit, offsetId)`** (required, 8 keys now): one getHistory page mapped to api-level entries by `historyPageEntries()` — mirrors `searchMessagesByName`'s row reduction (`messageName` + `fetch` closure), so the walk runs offline against fakes and online unchanged through `scopeApi`/`forScope`.
3. **`Pruner::prune`** — documented duck-typing: `method_exists($vault, 'listAllEntries')` → full walk for `TelegramVault`; every other `VaultInterface` implementation (InMemoryVault, test fakes) falls back to `findMessagesByName('')`, whose listing is already complete. `VaultInterface` untouched.

## Tests (5 new)

`tests/Backup/PrunePaginationTest.php` — harness is a `UserAccountScope` double under the **real `forScope` wiring** (`PaginatedHistoryScope`: in-memory store, getHistory honoring offset_id, searchMessages mirroring server-side search over all history so `delete()` of old orphans works, getDialogs resolving the channel, deleteMessages revoking for real):

- **Regression pin**: 250 stored messages (manifest + 2 keep chunks + 247 orphans, mock getHistory pages 100+100+50) → `scanned == 250`, `pruned == 247`, orphan at id 100 (beyond the old cap) IS deleted, oldest orphan too, keep-set + manifest survive.
- **Pagination shape + termination**: exactly 4 history calls — `[limit 100, offset 0|151|51|1]`, the last returning the empty page.
- **Entry shape**: `{id: string, name: string}` only, newest first.
- **Hard cap**: 10001 seeded messages → `RuntimeException` carrying "manual review".

`tests/Backup/TelegramVaultTest.php`: seven→eight callables pin; new api-map-level case — 150 seeded docs → `findMessagesByName('')` still capped at 100 (find path unchanged) while `listAllEntries()` returns all 150. `tests/Support/FakeVaultApi.php` gained a real `listHistoryPage` (offset-cursor semantics, shared `entryOf` row builder).

## Gates & commit

- `vendor/bin/phpunit`: **OK, 334 tests (329 + 5 new), 10512 assertions, 5 skips** (live smoke + PG track — opt-in by design).
- `composer analyse`: **[OK] No errors** (preg_* disallowed-calls gate included).
- `grep -rn preg_ src/`: **0**.
- Commit: `fix(backup,important): uncapped paginated prune walk — SEARCH_LIMIT no longer hides orphans`.

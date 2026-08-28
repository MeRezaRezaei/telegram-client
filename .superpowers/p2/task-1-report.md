# P2 Task 1 Report — Migration runner + flat-constructor ingest

**Status:** DONE — commit `c318705` "feat(ingest): flat-constructor ingest with tenancy + idempotency" · phpunit **OK (88 tests, 9360 assertions)** (76 P1 baseline + 7 parallel Task-2 walker + 5 Task-1) · phpstan **[OK]** (level 5 + disallowed-calls) · zero `preg_` in `src/`.

## P1-generator gap found and fixed — tenancy column

`TlAnchorModel` anchor DDL had **no `account_id`** (confirmed by reading
`generated/migrations/2026_08_28_000403_create_tl_user_table.php` + `MigrationGenerator::typeMigration()`),
violating the locked roadmap contract ("account_id on every anchor"). Per the
global constraint (generated layer is read-only for ingest → generator fix +
regenerate, never hand-edits):

- `src/Schema/Generator/MigrationGenerator.php` — every anchor table now emits
  `$table->bigInteger('account_id')` + `$table->index('account_id')`.
- TDD: `MigrationGeneratorTest::test_anchor_shape` gained the pin first (red → green).
- Regenerated via `php bin/regenerate --ship`: 635 `generated/migrations/*` +
  112 shipped dial refreshed as **byte-identical copies** (ShipDialGolden
  still green). Manifest sha unchanged (`f2462a3e…` — it hashes counts/tables,
  not file bytes), so the RegenerationGolden pin needed no update.

## What was built

- `src/Ingest/UpdateIngestor.php` — `boot()` (artisan `migrate --force
  --realpath` over dial + entity anchors; idempotent), `migrationPaths()` /
  `entityMigrationPaths()`, and `ingest(array $payload, int $accountId)`:
  flat-constructor map `user → [TlUser, TlUserUser, 0x31774388]`, `Naming::column()`
  key mapping (wire snake → columns; `id` → `tl_id`), anchor create via
  `forceFill` (UUIDv7 PK from `TlAnchorModel::booted`), instance
  upsert with shared PK inside `DB::transaction`, tenant-scoped `tl_id`
  lookup through the instance table, unknown constructors throw
  `InvalidArgumentException` (fail loudly, Task 1 surface).
- `tests/Ingest/Concerns/RunsMigrations.php` — sqlite `:memory:` config +
  one-pass migrate of dial + entity paths.
- `tests/Ingest/IngestTestCase.php` — extends Schema TestCase, wires the trait.
- `tests/Ingest/UpdateIngestorTest.php` (5) — boot surface (`tl_user`,
  `tl_user_user`, `tl_users_users`); canned v227 `user#31774388` payload
  (snake keys, raw flag ints, honest flag bits incl. `premium: flags.28?true`
  as an explicit key) → anchor (UUIDv7 PK, ctor id `0x31774388`, account 7) +
  verbatim instance row; re-ingest idempotent (same uuid, counts stable);
  account 8 gets its own anchor (no global singletons); unknown ctor fails.

## Deviations / decisions

- **Dial ≠ entity anchors:** the shipped 112 dial deliberately excludes the
  root-namespace `tl_user` anchor (P1 Task-4 semantics), so ingest migrates
  dial + `generated/migrations/…_000403_create_tl_user_table.php` together.
  Growing entity list lives in `UpdateIngestor::entityMigrationPaths()` until
  Task 3 needs a metamodel-driven selection.
- **`migrate --path` replaces registered package paths** (BaseCommand::
  getMigrationPaths) — the dial dir must be passed explicitly; done in
  `migrationPaths()`, documented in both trait and ingestor.
- **Nested refs/vectors skipped** in `columns()` (arrays dropped): flat Task-1
  scope; payload's `photo`/`status`/`emoji_status`/colors/usernames/
  restriction_reason are Task 3 walker+children work.
- **Constructor ids are scheme-truth** (`.tl`-written hex as int), NOT runtime
  `crc32()` — `crc32('user') = 0x8d93d649 ≠ 0x31774388`.
- **Re-ingest = upsert, not delete+recreate:** absent conditional columns are
  not cleared (fill-only). Verbatim-resnapshot semantics deferred to Task 3.

## Next (Task 3 hooks ready)

`ingest()` return feeds child/vector writes; walker (Task 2, parallel, already
committed `d735098`) supplies parent linkage; `tl_message`/`tl_chat` anchors
extend `entityMigrationPaths()`.

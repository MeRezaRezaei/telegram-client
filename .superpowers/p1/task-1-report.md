# Phase 1 — Task 1 Report: Verbatim port + re-namespace + license strip

**Status: COMPLETE** — gates green (phpunit 53 tests / 284 assertions OK; phpstan level 5 + disallowed-calls `[OK] No errors`).

## Files ported

- `src/Schema/Generator/` — 12 files: TlParser, TlCanon, TlParseException, TlRegenerateException, Naming, CodeWriter, Manifest, SchemaRegenerator, MigrationGenerator, ModelGenerator, DtoGenerator, FactoryGenerator
- `src/Schema/Generator/Model/` — 5 files: TlScheme, TlType, TlConstructor, TlMethod, TlParam
- `src/Schema/Eloquent/` — 3 files: TlAnchorModel, TlInstanceModel, HasTlChildren
- `src/Schema/RegenerateCommand.php` — renamed `telegram-schema:regenerate` → `telegram-client:regenerate` (incl. CodeWriter BANNER)
- **New** `src/TelegramClientServiceProvider.php` — minimal: SchemaRegenerator singleton + command registration (fork's `loadMigrationsFrom` dropped — no committed `generated/` until T3)
- `tests/Schema/` — ported: NamingTest, TlMetamodelTest, TlParserTest (+ `fixtures/mini.tl`), MigrationGeneratorTest, ModelGeneratorTest, DtoGeneratorTest, FactoryGeneratorTest, SchemaRegeneratorTest (incl. determinism + count-gate tests); adapted: ScaffoldTest; new: PortSmokeTest per plan Step 1 (classes exist incl. trait_exists for HasTlChildren; final/abstract modifiers preserved; no AFFERO under src/)

**21 fork src files + 1 new provider; 9 test files + 1 fixture.**

## Gates

- `vendor/bin/phpunit` → **OK (53 tests, 284 assertions)**
- `vendor/bin/phpstan analyse` → **[OK] No errors** (preg_* ban active, zero hits)
- `grep preg_ src/` → none; `declare(strict_types=1)` in every ported file; no AGPL/danog headers (only a clean-room provenance docblock in TlParser)

## Deviations / notes

1. **Fork's "regex-free TlParser" claim is FALSE** — `preg_` existed in 5 files / 13 sites (TlParser ×6, TlParam ×3, TlCanon ×2, Naming::snake ×1, SchemaRegenerator ×1). All rewritten with string functions (`strspn`/`ctype_*`/`strpos`/`str_starts_with`/token split). **Differentially verified** against the fork's regex implementations on identical inputs: TlCanon 9 defs, TlParam+Naming 32 cases, TlParser 12 scheme inputs — byte-identical outputs incl. exception classes/messages and crc-mismatch counts. The differential harness caught one real edge divergence during development (`Vector<>` empty inner type accepted by my first rewrite, rejected by the regex) — fixed.
2. **Command options**: plan's interface line said `{--force} {--all-tracked}` but the brief said keep the fork's options — kept `--force`, `--schemas=`, `--out=` (fork has no `--all-tracked`). Reconcile in T3 if needed.
3. **`symfony/uid` added to composer.json** (`^6.0|^7.0`) — fork required it; `TlAnchorModel` imports `UuidV7` and `FactoryGenerator` emits it into factory code; it was absent here (installed via composer, network available; lock is gitignored in this repo).
4. **`TlInstanceModel` now `use HasTlChildren;`** — phpstan `trait.unused`: the trait's only consumers are *generated* models (string output of ModelGenerator), nonexistent until T3. Composing it into the base those models extend is semantically exact and additive-only; PHP allows the generated models' own `use HasTlChildren` to coexist.
5. **`HasTlChildren::tlChild()`** split `hasMany(...)->orderBy('idx')` chain into a statement + `return $relation` — identical runtime (Relation decorated forwarding returns the relation), needed because `orderBy` goes through `__call` (untypeable without larastan).
6. **CodeWriter** `@param $bodyLines` docblock on `migrationFile` corrected to `$upLines/$downLines` (fork doc bug; type-level only).
7. **Deferred to T3**: `DatabaseMirrorTest` + `tests/Support/{CreatesTestDatabase,TestIngestor}` (require committed `generated/` + opt-in `TG_SCHEMA_TEST_PG` Postgres), and any artisan-invocation coverage.

## Commit

Single commit on main: `feat(schema): port mirror generators from owner's fork (MIT, re-namespaced)`

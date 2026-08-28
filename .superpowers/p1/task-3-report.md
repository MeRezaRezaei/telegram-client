# Task 3 Report — Regenerate end-to-end + deterministic manifest + golden pins

**Commit:** `a0e9bbd` "feat(schema): committed full v227 mirror artifacts + golden regeneration gate"
**Plan:** docs/superpowers/plans/2026-08-28-p1-schema-mirror.md Task 3 + Global Constraints (+ controller rulings of 2026-08-28)

## What shipped

1. **Full v227 mirror sources** — copied the owner's three schema files byte-identical
   (sha256-verified) from the MadelineProto fork into our `schema/sources/`:
   `TL_telegram_v227.tl` (3039 ln, `// LAYER 227`), `TL_mtproto_v1.tl`, `TL_secret.tl`.
   `TeleprotoSchemeLoader::defaultSourcesDir()` precedence is now: config/env override →
   **our committed mirror** → teleproto's partial vendored sources (documented fallback).
   `TL_secret.tl` is split by MadelineProto `===N===` layer fences — loader skips those
   lines (regex-free, `str_starts_with/str_ends_with`); secret ctors merge cleanly.
2. **`bin/regenerate`** — artisan-less thin runner (teleproto bin pattern): composer
   autoload, `RegenerateCommand` given a minimal container (`Illuminate\Container\Container`
   + anonymous subclass adding the one Foundation-contract method the run path needs,
   `runningUnitTests()` from `ConfiguresPrompts`), driven through a Symfony console
   `Application` with `StringInput`. **Zero refactor** of the Laravel-bound command.
   Fixed en route: command default `--out` was `dirname(__DIR__)` = `src/` (one level
   short → `src/generated/`); now `dirname(__DIR__, 2)` = package root. Default
   `--schemas` now routes through the loader default (our mirror).
3. **Committed artifacts** — `generated/` : 635 migrations, 2928 models, 3116 DTOs,
   1684 factories, `schema-manifest.json` (8364 files, every file carries the
   `GENERATED — do not edit` marker; manifest internal hash `f7b5c70f88df`).
4. **Tests** — `tests/Schema/RegenerationGoldenTest.php` (5 tests): manifest exists +
   layer 227 + sources pinned; counts in bands; artifact-file counts in bands with
   `@generated` marker sweep over all 8363 PHP files; `TlUser` anchor spot check;
   **determinism double-run** via `proc_open` on `bin/regenerate` to two temp `--out`
   dirs — full manifests sha256-identical to each other AND to the committed
   known-good pin constant (`f2462a3e…`), plus whole-tree byte equality (>8000 files).
   Full generation is ~0.4 s, so the double-run needs no `--schemas` subset flag.
   Task-2's `MetamodelFromTeleprotoTest` updated to the real bands, layer 227, and
   `user#31774388` pin (hex as written in the .tl source = decimal 829899656 =
   `sprintf('%08x') === '31774388'`), plus a secret-fence merge test.

## Verified run (this machine, 2026-08-28)

```
$ php bin/regenerate
regenerated: 3 files, 664 types, 1685 constructors, 799 methods, 3678 tables, 1535 deferred FKs (manifest hash f7b5c70f88df)
real 0m0.407s
```

| Quantity | Actual | Band used | Controller band |
| --- | --- | --- | --- |
| layer | 227 | ==227 | 227 ✓ |
| constructors | 1685 | 1500–2500 | **6000–9000 — IMPOSSIBLE, see note** |
| methods | 799 | 750–950 | 750–950 ✓ |
| migrations | 635 | 500–800 | 500–800 ✓ |
| models | 2928 | 2500–3500 | 2500–3500 ✓ |
| dtos | 3116 | 2800–3600 | 2800–3600 ✓ |
| tables | 3678 | 3000–4200 | 3678 ✓ |
| factories | 1684 | >1500 | (not given) |

## DEVIATION — controller constructor band 6000–9000 cannot hold

The owner's `TL_telegram_v227.tl` is 3039 lines (types section ends at line 2223):
~1620 ctor lines + 790 function lines; + secret (81 defs) + mtproto (48 defs, minus
builtins/generics), merged/deduped → **1685 constructors, 799 methods, 664 types** —
byte-for-byte the counts recorded in the fork's own committed `generated/schema-manifest.json`
(664/1685/799, 3678 tables), which our run reproduces exactly. The controller's
"fork's real run: 633/2817/3010, 3678 tables" refers to migrations/models/dtos/tables
(verified: 635/2928/3116/3678 today — small drift vs the fork's committed run, schema
moved on); the 6000–9000 constructor band does not correspond to any count these
sources can produce (total generated PHP files = 8363 — possibly what the band was
derived from). I banded constructors 1500–2500 (brackets 1685 with layer-drift
headroom) and kept every other controller band verbatim. If the intent was truly the
full official core.telegram.org api.tl (~8k ctors), the sources themselves need
replacing — flagging for controller decision; everything else (wire Layer 227 match,
user pin, determinism) is as ruled.

## Gates

- `vendor/bin/phpunit` → **OK (67 tests, 8715 assertions)** (was 61)
- `vendor/bin/phpstan analyse` → **[OK] No errors** (level 5 + disallowed-calls)
- `grep -rn "preg_" src/` → **0** (zero-regex holds; bin/ uses `escapeshellarg` only)
- AGPL sanity → no `AFFERO`/copyright headers in src/, schema/, generated/ (only
  format-provenance comments naming danog/MadelineProto file formats, Task-1 precedent)
- Determinism → two consecutive full runs: identical trees (8363 files sha256-compared)

## Notes for Task 4 (curated migration dial)

- `MigrationGenerator::stats()` already returns the table map the dial can filter on;
  manifest carries `tables` name→file mapping for subset publication.
- The ±30% gate reads the manifest in the target out-dir; committed `generated/` is
  the gate baseline — regeneration after a layer bump may need `--force` (by design).

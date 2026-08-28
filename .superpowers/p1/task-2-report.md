# P1 Task 2 Report — Metamodel from teleproto layer-229 sources

**Status: DONE.** Commit: `feat(schema): metamodel from teleproto layer-229 sources`

## What changed

| File | Change |
| --- | --- |
| `src/Schema/Generator/TeleprotoSchemeLoader.php` | NEW input adaptor: reads `schema/sources/*.tl` line protocol (`//` comments incl. `// LAYER N`, `---types---`/`---functions---` switches), maps teleproto `TLSignatureParser::parse()` → `ParsedSignature` → fork `TlConstructor`/`TlMethod`/`TlParam` (metamodel untouched). |
| `src/Schema/Generator/SchemaRegenerator.php` | Seam: `parseAll()` now uses `TeleprotoSchemeLoader::parseFile` (fork `TlParser` no longer feeds regeneration). NEW `loadScheme(?string $sourcesDir = null): TlScheme` per plan Interfaces-Produces. Layer = max per-file `// LAYER N` (filename-scan `layerFromFilename` removed — dead). |
| `config/telegram-client.php` | NEW: `schema_sources` (env-overridable, null default → loader resolves vendor path). |
| `src/TelegramClientServiceProvider.php` | `mergeConfigFrom` registration. |
| `tests/Schema/MetamodelFromTeleprotoTest.php` | NEW: 8 tests (written first, red → green). |

## Mapper details (per plan Step 2)

- **Conditional fields**: `flagWord`+`bit`+`type` rebuild the byte-exact `name:flags.N?T` token; `TlParam` parses it into its `conditional()` fields. Pinned in test (`silent:flags.5?true` → `['flags',5]`).
- **Vectors pass through verbatim** (`Vector<RestrictionReason>`, lowercase `vector<future_salt>`, nested `Vector<Vector<TlsBlock>>`) — tokenizer keeps angle groups raw.
- **Explicit ids** are wire truth; crc-verified via ported `TlCanon` (`crc32b(normalize(canonical))`), mismatches recorded (fork policy). Only 9 mismatches across 2.5k defs (the generic `invoke*` wrappers + `vector`) — sources are internally consistent with the fork canon.
- **Id-less lines** (mtproto.tl `tls*` family): id computed as `hexdec(crc32b(TlCanon::normalize(canonical)))` — TlCanon reused, never invented. Pinned: `tlsBlockDomain` id === that computation.
- **Out-of-grammar lines**, handled explicitly (never silently dropped): core builtins (`int ? = Int;`, `int128 4*[ int ] = Int128;` — file itself says "no need to gen") skipped; generic combinators (`{t:Type}`/`{X:Type}`, `!X`, bare `Vector t`) mapped via manual generic-filler path with fork semantics (fillers excluded from `params()`, generators skip them); anything else rejected by the tokenizer throws `TlParseException` with file:line.

## Plan deviations (ground truth = committed sources)

1. **Constructor band**: plan said `>7000`; committed `api.tl`+`mtproto.tl` contain **1,710 constructors / 823 methods / 675 types at layer 229** (api.tl is 3,117 lines — a curated layer-229 mirror, not the full official ~8k-constructor file; teleproto's own commit says "derive full mtproto (812 methods, layer 229)"). Test asserts `>1500` ctors / `>700` methods. **Task 3's golden bands (ctors 7000–9000, models 2500–3500, dtos 2800–3600, migrations 500–800) will need re-baselining to these committed-source counts.**
2. **`user` id**: plan said `31774388`; that id lives in teleproto's curated layer-227 `TLRegistry`/`UserScopeSchema`, NOT in the sources. Committed api.tl line 89 carries `user#b1b8cc83` — test pins `b1b8cc83` + `id:long`. (Neither id self-verifies under naive crc32; stated file ids are wire truth, as in the fork.)

## Gates

- `vendor/bin/phpunit` → **OK, 61 tests / 311 assertions** (53 prior + 8 new; fixture-based `SchemaRegeneratorTest` incl. determinism stays green through the new loader).
- `vendor/bin/phpstan analyse` → **[OK] No errors** (level 5 + `preg_*` disallowed-calls).
- `grep -rn 'preg_' src/` → 0; no AGPL/danog text in touched files; `declare(strict_types=1)` everywhere.

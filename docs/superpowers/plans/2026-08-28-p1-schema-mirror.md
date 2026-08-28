# Phase 1: Schema Mirror Port — Implementation Plan

> **For agentic workers:** REQUIRED SUB-SKILL: superpowers:subagent-driven-development. Groups run in label order; tasks inside a group touch disjoint files and MAY run as parallel implementers.

**Goal:** Port the owner's schema-mirror generators from the MadelineProto fork into telegram-client as a working, MIT, teleproto-input-driven package that regenerates migrations/models/DTOs/factories for layer 229 with golden tests.

**Architecture:** Copy the fork's `packages/laravel-telegram-schema/src` (Generator/, Eloquent/, command, provider — ~1.4k lines + tests) verbatim; re-namespace to `MeRezaRezaei\TelegramClient\Schema`; replace its self-contained TlParser/TlCanon input stage with teleproto's committed `.tl` sources + `TLSignatureParser` (fork parser kept only where its richer metamodel needs things teleproto's parser doesn't return — adapt, don't fork logic). Committed `generated/` output + manifest.

**Tech Stack:** PHP 8.2+, teleproto dev-main (path repo), illuminate/*, spatie/laravel-data, PHPUnit.

**Spec:** `docs/superpowers/specs/2026-08-28-master-roadmap.md` (P1) — read first.

## Global Constraints

- MIT: every shipped file has our header or none; NO AGPL headers may enter this repo. Before committing any ported file: `grep -L "Copyright"` sanity; if a file carries `danog`/AGPL header text, strip the header (the owner's authorship is preserved by his own copyright line if present, else none needed).
- Zero `preg_` in src/ (phpstan gate active in this repo).
- `declare(strict_types=1);` everywhere ported (fork files have it — verify).
- Generated outputs (`generated/`) are committed artifacts with `@generated` markers; regeneration must be deterministic (manifest hash stable across runs on same input).
- No network in tests; regeneration reads teleproto's committed `schema/sources/*.tl` via the path repo (`vendor/merezarezaei/teleproto/schema/sources/`).
- Suite green after every task; phpstan `[OK]`.

## File Structure

```
src/Schema/Generator/*.php        (port: TlParser-ADAPTOR, metamodel Model/*, Naming, MigrationGenerator,
                                   ModelGenerator, DtoGenerator, FactoryGenerator, SchemaRegenerator,
                                   Manifest, CodeWriter, exceptions)
src/Schema/Eloquent/*.php         (port: TlAnchorModel, TlInstanceModel, HasTlChildren)
src/Schema/RegenerateCommand.php  (port: artisan telegram-client:regenerate)
src/TelegramClientServiceProvider.php (new: registers command)
tests/Schema/*.php                (port fork tests that still apply + new golden tests)
generated/                        (committed output)
config/telegram-client.php        (dial: curate ship-subset, paths)
```

---

### Task 1 (G1): Verbatim port + re-namespace + license strip

**Files:** Create all `src/Schema/**` from fork `packages/laravel-telegram-schema/src/**`; Create `src/TelegramClientServiceProvider.php`; Modify `composer.json` (autoload already ok; add spatie/laravel-data if missing — present). Test: `tests/Schema/PortSmokeTest.php`.

**Interfaces — Produces:** namespace `MeRezaRezaei\TelegramClient\Schema\{Generator,Eloquent}`; `RegenerateCommand` signature `telegram-client:regenerate {--force} {--all-tracked}`; Eloquent bases `TlAnchorModel/TlInstanceModel/HasTlChildren` unchanged APIs.

> **Deviation (shipped):** the regenerate CLI exposes `--schemas/--out/--ship` instead of `--all-tracked` — same tracked-mirror goal, explicit source/output dirs (see `bin/regenerate`).

- [ ] **Step 1** Copy fork src → `src/Schema/` (exclude vendor/). Scripted port: replace namespace `MeRezaRezaei\LaravelTelegramSchema` → `MeRezaRezaei\TelegramClient\Schema`, fix internal `use` lines; strip any AGPL/danog header lines; keep strict_types.
- [ ] **Step 2** New provider registering RegenerateCommand (+ later ingest). Smoke test asserting classes exist + are final/readonly where fork had them:
```php
public function testPortedClassesExist(): void
{
    foreach (['Generator\\SchemaRegenerator','Generator\\Naming','Generator\\MigrationGenerator',
              'Eloquent\\TlAnchorModel'] as $c) {
        $this->assertTrue(class_exists('MeRezaRezaei\\TelegramClient\\Schema\\'.$c), $c);
    }
}
public function testNoAgplHeadersShip(): void
{
    $it = new \RecursiveIteratorIterator(new \RecursiveDirectoryIterator(dirname(__DIR__,2).'/src'));
    foreach ($it as $f) if ($f->getExtension()==='php')
        $this->assertStringNotContainsString('AFFERO', (string)file_get_contents($f->getPathname()), $f->getPathname());
}
```
- [ ] **Step 3** Run: `vendor/bin/phpunit` → PASS. `vendor/bin/phpstan analyse` → fix level-5 findings in ported code (types only, no logic).
- [ ] **Step 4** Commit: `feat(schema): port mirror generators from owner's fork (MIT, re-namespaced)`.

### Task 2 (G1, parallel w/ 1): Input adapt — teleproto sources feed the metamodel

**Files:** Modify `src/Schema/Generator/` input seam (TlParser usage in SchemaRegenerator). Test: `tests/Schema/MetamodelFromTeleprotoTest.php`.

**Interfaces — Consumes:** teleproto `vendor/merezarezaei/teleproto/schema/sources/{api,mtproto}.tl`, `MeRezaRezaei\Teleproto\MTProto\TL\TLSignatureParser::parse(): ParsedSignature`. **Produces:** `SchemaRegenerator::loadScheme(): TlScheme` populated from teleproto sources (metamodel untouched).

- [ ] **Step 1** Failing test: loadScheme() returns >700 methods, >7000 constructors, layer 229; spot: constructor `user#31774388` present with param `id:long`; method `messages.sendMessage` params include `message:string`.
- [ ] **Step 2** Adapt: replace fork's own .tl reading with a mapper `ParsedSignature → TlConstructor/TlMethod/TlParam` (flag words→conditional params; Vector<> types pass through). Keep fork's crc verification via ids when explicit; id-less lines: fork policy was strict — teleproto sources have ids on functions but NOT on type constructors... fork's TlCanon computed crc for id-less; REUSE fork's TlCanon for those lines (it's ported) — do NOT re-invent.
- [ ] **Step 3** Green + full gates. Commit: `feat(schema): metamodel from teleproto layer-229 sources`.

### Task 3 (G2): Regenerate end-to-end + deterministic manifest + golden pins

**Files:** Modify nothing structural; run command; Create `generated/` outputs + `tests/Schema/RegenerationGoldenTest.php`; `config/telegram-client.php`.

- [ ] **Step 1** Failing golden test: manifest exists, layer 229, counts within documented bands (constructors 7000–9000, methods 700–950, migrations 500–800, models 2500–3500, dtos 2800–3600); sha256 of manifest stable across two consecutive runs (run command twice in test via proc_open to temp out-dir — no, deterministic check: run once, hash file, run again, compare).
- [ ] **Step 2** Execute `php artisan`-less invocation path (command is Laravel-bound; provide thin `bin/regenerate` requiring bootstrap like teleproto's bin pattern) → generate committed `generated/`.
- [ ] **Step 3** Commit outputs + test: `feat(schema): committed layer-229 mirror artifacts + golden regeneration gate`.

### Task 4 (G2): Curated migration dial

**Files:** Modify `config/telegram-client.php` + `SchemaRegenerator` (ship-subset flag). Test extend goldens.

- Ship-subset: `config dial "ship" list (auth/messages/users/channels/updates/help namespaces)` → migrations published under `migrations/` for subset only; full set stays in `generated/` with doc note. Golden asserts subset migrations < 200 and contain `create_tl_user` etc.
- Commit: `feat(schema): curated migration dial`.

## Parallel Dispatch Summary
G1: Tasks 1 ∥ 2 (disjoint: ported files vs input seam? Task 2 MODIFIES ported files → NOT disjoint). → **G1 = Task 1 alone; G2 = Task 2; G3 = Task 3; G4 = Task 4** (sequential — the port has a hard dependency chain). No parallelism available in P1; parallelism returns in P2/P3.

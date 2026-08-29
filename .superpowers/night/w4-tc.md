# Night W4 — docs-drift audit + safety minors (telegram-client)

Date: 2026-08-29 · Branch: master · Gates: `vendor/bin/phpunit` **OK (329 tests, 10188 assertions, 5 pre-existing live/PG skips)** · `composer analyse` (phpstan L5 + disallowed-calls) **[OK]** · `grep preg_ src/` **0 hits**.

## 1. CHANGELOG.md — Unreleased rewritten

Release-blocker block removed (all three DONE: teleproto `v1.1.0` tagged, composer on `^1.1` via Packagist, GitHub repo live). Proper Unreleased entries for the night work:

- **Added — PostgreSQL test track** (W3, 1febb60): `tests/Pg` full 637-migration mirror + deferrable-FK proof, `TELEGRAM_CLIENT_PG=1` fail-not-skip gate, `pg-tests` CI job (postgres:17).
- **Added — Backup prune (chunk GC)** (W1-3, 01c48e0): `telegram-client:backup prune`, latest-manifest keep-set, keyless/cron-safe; closes the "orphaned chunks never GC'd" v0.1.0 limit.
- **Fixed — Ingest identity serialization** (W1-2, 48598ef): `IdentityLock` — pg `pg_advisory_xact_lock(hashtext(key))` inside the caller's xact + depth-counted in-process reentrant map; sqlite/mysql documented no-op.
- **Fixed — Bus wedged ingest failures** (W1-3, 3a2e14a): retry cap 3 → DL `reason=ingest-failed` + error message.

Folding decision: ea34fde (vault peer-ref contract + realtime-aware find, search+history merge) predates the `v0.1.0` tag → folded as a new bullet under 0.1.0 "Fixed — Backup Vault review wave" instead of Unreleased (honest timeline). 79d44de (stash-race wiring completion, no user-visible change) intentionally not listed.

## 2. docs/ingest.md

- New **Concurrency** section: IdentityLock two-layer design (in-process depth-counted reentrancy map; pg transaction-scoped advisory lock auto-released at commit/rollback; sqlite/mysql no-op + convergence note).
- **sqlite vs Postgres** section: stale "PG-only behavior is exercised by the CI/live gate, not the unit suite" replaced with the real PG track note (tests/Pg, `TELEGRAM_CLIENT_PG=1` + `TELEGRAM_CLIENT_PG_*`, fail-not-skip, CI pg-tests job).

## 3. llms.txt

- Poison semantics line fixed: no-match → `TelegramClient::ingest` with **failure retry cap 3 → DL `reason=ingest-failed`**; undecodable poison → DL on first sight (was: ambiguous single "poison → DL; everything acked").
- Backup CLI line: `<run|restore|verify|prune|status>` + prune one-liner (keep-set GC, keyless, cron-safe).
- Capabilities PG line: no "not exercised" claim existed; extended to state the PG track + CI pg job coverage explicitly.

## 4. Safety — SchemaRegenerator shell-free delete

Both `exec('rm -rf '.escapeshellarg($dir))` sites (ship `migrations/`, `wipe()` generated trees) replaced by `removeTree()`: `RecursiveDirectoryIterator` + `RecursiveIteratorIterator::CHILD_FIRST`, `SKIP_DOTS`, symlinks unlink (never traverse), then `rmdir`. Companion `mkdir` 0777 → **0775** everywhere in the file (dev-artifact trees: group-writable, not world-writable — note in the helper docblock). New regression test `test_regenerate_wipes_stale_outputs` (nested stale generated tree + stale shipped migration must not survive regen); existing regenerator + golden tests green — no artifact drift.

## 5. Safety — MigrationGenerator::quote() escaping

`quote()` now doubles embedded double-quotes (`str_replace('"','""')`, SQL-standard identifier doubling). Generated schema names carry no quotes today → goldens byte-stable (RegenerationGoldenTest + ShipDialGoldenTest green). New unit case `test_quote_doubles_embedded_double_quotes` (reflection on the private helper; went red → green).

## Gates & commit

- `vendor/bin/phpunit`: **OK, 329 tests (327 + 2 new), 10188 assertions, 5 skips** (live smoke + PG track — both opt-in by design).
- `composer analyse`: **[OK] No errors** (preg_* disallowed-calls gate included).
- `grep -rn preg_ src/`: **0**.
- Commit: `docs+chore(night): changelog unreleased, concurrency/PG docs, llms sync, shell-free regen delete, quote escaping`.

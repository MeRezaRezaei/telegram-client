# P4 Task 4 Report — Verifier + telegram-client:backup CLI + config + docs (G3, final)

**Status:** DONE · commit `aa3274d` on master, on top of T3 (`39e8f3c`). TDD: 29 tests written first (red → green).

## Produced

| File | What |
| --- | --- |
| `src/Backup/Verifier.php` | `verify(VaultInterface, int $sampleN=5, ?callable $rng=null): array{checked, ok, missing}` — availability-only: latest manifest `chunk_hashes` → sample N (all when fewer; default rng = shuffle+slice, injectable `callable(list<string>, int): list<string>` for determinism) → `getChunk` each; ok = non-empty bytes; missing = fetch failures. `verifyWithKey(vault, passphrase, sampleN=5, rng=null): array{checked, ok, missing, corrupt}` — derives the key from the manifest salt, full decrypt + plaintext sha256 vs content address; corrupt counts decrypt/hash failures. |
| `src/Console/BackupCommand.php` | `telegram-client:backup {action} {--set=default} {--passphrase=} {--target=} {--sample=5}` — actions `run\|restore\|verify\|status`; RuntimeException → error line + exit 1 (passphrase never logged). `verify` exits non-zero on missing/corrupt/`ok < checked`; with `--passphrase` it upgrades to verifyWithKey (prints `corrupt:N`). |
| `src/TelegramClientServiceProvider.php` | `BackupCommand::VAULT_FACTORY_KEY` seam: `callable(string $setId): VaultInterface`. `memory` (offline default) → per-set **shared** container binding (`telegram-client.backup.vault.<set>`, shared=true) so run→restore round-trips inside one process; `telegram` → reuses the **P3 SCOPE_RESOLVER_KEY seam** (`BackfillCommand::SCOPE_RESOLVER_KEY` → daemon.accounts registry → `AccountWorker::buildLiveScope`) → `TelegramVault::forScope($scope, setId)`; loud errors for unknown driver / missing `backup.account`. Command registered in `boot()`. |
| `config/telegram-client.php` | `backup` section: `driver` (env `TELEGRAM_CLIENT_BACKUP_DRIVER`, default `memory`), `account` (env `TELEGRAM_CLIENT_BACKUP_ACCOUNT`), `chunk_size` (4194304, env override), `sets.default.{paths, excludes}`. |
| `tests/Backup/VerifierTest.php` | 16 tests: identity-rng all-chunks path, injected first-N rng (asserts rng receives list + n), fewer-than-n covers all, default shuffle scales with n, missing via `SelectiveVault` double, empty chunk = checked-but-not-ok, no-manifest throws, sample<1 rejected, empty chunk list → zeroes, verifyWithKey full ok / missing / wrong-passphrase-all-corrupt / hash-mismatch-corrupt / sample<1 / missing-salt throws. Argon2id key cached static (T1 pattern). |
| `tests/Console/BackupCommandTest.php` | 13 tests: **run→status→verify→restore end-to-end on tmpdir with memory driver** (dedup counts uploaded:5 skipped:2, status summary, restore byte-identical), verify+passphrase full check, verify failure (factory seam swapped to `HalfMissingVault`) exits 1, second run uploads 0, passphrase from env, missing passphrase/target errors, no-manifest status, unknown action/set, telegram driver reaches the backfill scope seam, telegram driver without account fails, unknown driver fails, command registered. |
| `docs/backup.md` + CHANGELOG | Overview (channel-per-set, content-addressed chunks, Argon2id13 3-pass/256 MiB + XChaCha20-Poly1305 secretstream-FINAL per chunk — T1 params, manifest-first restore), setup (dedicated session via daemon.accounts, **channel find-or-create automatic on first run**), config example, CLI examples, verifier semantics (availability vs structural integrity), security notes (passphrase never logged, no server-side index, lose-passphrase-unrecoverable), limits (4 MiB ≪ 2/4 GB caps, per-set dedup scope, memory driver non-persistent). |

## Design decisions

- **Availability vs integrity split** (per instruction): plain `verify` needs no key — ok = chunk downloads non-empty; integrity is structural (secretstream FINAL fails loud at restore time). `ok + missing < checked` is the anomaly signal for an empty-but-present chunk; the command treats it as failure too.
- **`$this->run()` would collide with `Command::run()`** (Laravel), so handlers are `runAction/restoreAction/verifyAction/statusAction` behind a `match`.
- **Memory-driver persistence within a process**: per-set shared container binding (not a fresh InMemoryVault per invocation) is what makes the CLI loop testable — and is documented as smoke-test-only storage.
- **Passphrase precedence**: `--passphrase` → `getenv('TELEGRAM_CLIENT_BACKUP_PASSPHRASE')` (mirrors AccountWorker's getenv pattern); value never reaches output.

## Gates

- `composer test`: **300 tests, 10,055 assertions, OK** (271 baseline + 29 new; 4 pre-existing live skips unchanged).
- `composer analyse` (level 5 + disallowed-calls): **[OK] No errors**.
- `grep preg_ src/` → 0. strict_types everywhere. No network in tests.

## Phase 4 status

T1–T4 complete; plan file structure fully delivered (`VaultInterface`, `InMemoryVault`, `TelegramVault`, `VaultCrypto`, `Chunker`, `BackupRunner`, `Restorer`, `Verifier`, console command, config, docs, CHANGELOG).

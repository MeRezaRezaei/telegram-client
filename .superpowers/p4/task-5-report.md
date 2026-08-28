# P4 Task 5 Report — Review fix wave (I1, I2, M1–M3)

**Status:** DONE · commit `fix(backup): live smoke gate + security/rotation/limits docs` on master, on top of T4 (`aa3274d`). Docs + one test + one docblock; no behavior change.

## Findings → fixes

| ID | Fix |
| --- | --- |
| I1 | `tests/Backup/LiveVaultSmokeTest.php` — live-gated smoke, skipped unless `TELEGRAM_CLIENT_LIVE` truthy AND a session resolves. Env loading mirrors teleproto's `bin/test-e2e.php`: `EnvFile::read(dirname(__DIR__, 3) . '/teleproto/.env')` first (`TELEGRAM_USER_SESSION`/`TELEGRAM_API_ID`/`TELEGRAM_API_HASH`), plain `getenv` fallback (`TELEGRAM_USER_SESSION`/`TG_API_ID`/`TG_API_HASH`). Real scope via `(new TeleprotoClient(id, hash))->fromSession($session)` → `TelegramVault::forScope($scope, 'teleproto-smoke-' . date('Y-m-d'))` (dated set = fresh channel per day). Asserts 1 KB `random_bytes` `putChunk`/`getChunk` roundtrip by sha256 name + manifest `putManifest`/`getLatestManifest` decode-identity. Fetches go through a 3×/3s retry helper — Telegram's `messages.search` index trails writes; failures still fail loud after retries. Run manually: `TELEGRAM_CLIENT_LIVE=1 vendor/bin/phpunit --filter LiveVaultSmoke`. |
| I2 | `docs/backup.md`: prominent warning blockquote directly under the intro — dedup keys on the **plaintext** chunk hash and salt is reused per set, so a new passphrase on an existing set never re-encrypts (old ciphertext reused ⇒ mixed-key channel no single passphrase restores); rotation procedure: new set id → full `run` → `verify --passphrase` → retire old set/channel. Cross-reference added to the Security-notes passphrase bullet. BackupCommand run-output note skipped per reviewer (docs-only). |
| M1 | `docs/backup.md` Security notes: confirm-guess leak — chunk names are sha256 of plaintext, so a channel reader with a byte-exact content guess can confirm/deny presence by hash lookup, no key needed; marked low severity (private channel + precise guess, learns only present/absent). |
| M2 | `src/Backup/TelegramVault.php` class docblock: "NAMED by their ciphertext hash" → "NAMED by their plaintext content hash". |
| M3 | `docs/backup.md` Limits: orphaned chunks (dropped from every file list) are never GC'd — channel storage only ever grows, prune manually; telegram driver beyond offline wiring is exercised only by the live smoke (named, with its env gate). |

CHANGELOG `[Unreleased]` gained a "Fixed — Backup Vault review wave" section covering all five.

## Gates

- `composer test`: **301 tests, 10,055 assertions, OK — 5 skipped** (300 baseline + 1 new; the new smoke skips by default alongside the 4 pre-existing live skips — skipped count 4 → 5 confirms it gates off).
- `composer analyse` (level 5 + disallowed-calls): **[OK] No errors**.
- Live smoke itself **not** run here (no `TELEGRAM_CLIENT_LIVE` in this environment) — per finding, the controller runs it manually with env set.

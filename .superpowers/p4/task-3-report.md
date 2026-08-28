# P4 Task 3 Report — BackupRunner + Restorer (G2, consumes T1+T2)

**Status:** DONE · commit `39e8f3c` on master, on top of T2 (`61cf505`).

## Produced

| File | What |
| --- | --- |
| `src/Backup/BackupRunner.php` | `run(setConfig{paths, excludes?, chunk_size?, set?}, VaultInterface, passphrase): array{uploaded, skipped, files, bytes}` — walk paths, chunk, encrypt, dedup, `putManifest` LAST |
| `src/Backup/Restorer.php` | `restore(VaultInterface, passphrase, targetDir): array{files, bytes}` — latest manifest → derive key from its salt → fetch/decrypt/reassemble → rebuild tree |
| `tests/Backup/BackupRunnerTest.php` | 8 tests: manifest shape (version 1/set/salt hex/created/files/chunk_hashes), dedup counts (a.txt=b.txt → uploaded 2/skipped 1), second unchanged run `uploaded=0` + salt reuse, excludes substring, explicit-file entry → basename path, custom `chunk_size` split (9 B @ 10 → correction: 24 B @ 10 → 3 chunks), empty file → zero chunks, missing path loud, empty paths rejected |
| `tests/Backup/RestorerTest.php` | 5 tests: full roundtrip (nested dirs, 1000 B binary, empty file; chunk_size 64; sha256 compare), no manifest → `no manifest`, wrong passphrase → `Decryption failed`, tampered chunk (CorruptingVault double flips first ciphertext byte) → decrypt fails, crafted `../pwned.txt` manifest → rejected before any vault fetch or write (no dir created) |

## Design decisions

- **Chunk key = PLAINTEXT sha256** (from `Chunker::split`), not ciphertext hash: secretstream headers are fresh-random per encryption, so ciphertext addressing would break cross-run dedup. Vault docblock's "ciphertext hash" phrasing is satisfied operationally — the caller-supplied key IS the chunk's content address.
- **Salt reuse = dedup linchpin**: `saltForSet` reads `getLatestManifest()['salt']` (validated 32-hex/16 B) else `VaultCrypto::newSalt()`. Same salt + same passphrase → same Argon2id key → same plaintext chunk hashes → second unchanged run uploads zero (manifest `chunk_hashes` seeds the known set).
- **`skipped` counts chunk references** (per file occurrence), so unchanged 2-unique/3-reference set → run 1 `{uploaded:2, skipped:1}`, run 2 `{uploaded:0, skipped:3}`.
- **Walk**: `RecursiveIteratorIterator(RecursiveDirectoryIterator(SKIP_DOTS))` + `isFile`, `ksort` for deterministic manifests; directory roots strip prefix for relative paths, plain-file entries use `basename`; excludes are `str_contains` substring matches on the absolute path (string fns only).
- **Manifest**: `{version:1, set, salt(hex), created(gmdate c), files:[{path, size, chunks:[hash…]}], chunk_hashes:[unique first-seen]}` — self-contained (every referenced chunk stays in the vault across runs); posted last via `JSON_THROW_ON_ERROR | JSON_UNESCAPED_SLASHES`.
- **Restorer validates everything before writing**: null manifest → `RuntimeException('no manifest…')`; malformed salt/files/chunk hashes → loud; traversal guard (`''`, leading `/`, NUL, any `..` segment via `explode('/')`) runs as a pre-pass so a hostile manifest restores nothing; then per file `getChunk` → `decryptChunk` → `reassemble` → `mkdir -p dirname` → write.
- Validation lives where types are still `mixed` (in `run()`) so phpstan level 5 stays clean without widen-or-suppress.

## Gates

- `vendor/bin/phpunit`: **271 tests, 9998 assertions, OK** (baseline 258 + 13 new; 4 pre-existing live skips unchanged, no warnings).
- `vendor/bin/phpstan analyse`: **[OK] No errors** (level 5 + disallowed-calls).
- `grep preg_ src/ tests/` → 0 hits. strict_types everywhere.

## Notes for Task 4

- `Verifier` can sample from `manifest['chunk_hashes']`, `getChunk` + `decryptChunk` (or hash ciphertext address = key) for integrity spot-checks; `Restorer` + `InMemoryVault` are the offline wiring pattern for the `telegram-client:backup` command factory.
- `chunk_size` default 4 MiB is internal (`DEFAULT_CHUNK_SIZE`); config wiring belongs to T4.

# Phase 4 — Task 1 Report: VaultCrypto + Chunker (pure crypto/chunking substrate)

**Commit:** `feat(backup): vault crypto (argon2id + secretstream) + content-addressed chunker`
**Branch:** master · **Approach:** TDD (39 tests written first, red → green)

## Port source (fork `sdd/backup`)

`git show sdd/backup:src/Backup/Crypto.php` — fork's `generateSalt`/`deriveKey`/`encryptFile`/`decryptFile` (file-stream based). Owner's crypto design mirrored **exactly**:

- **Argon2id:** `sodium_crypto_pwhash(..., SODIUM_CRYPTO_PWHASH_OPSLIMIT_MODERATE, SODIUM_CRYPTO_PWHASH_MEMLIMIT_MODERATE, SODIUM_CRYPTO_PWHASH_ALG_ARGON2ID13)` — i.e. **3 passes / 256 MiB / Argon2id13**, 32 raw output bytes (documented in `VaultCrypto` docblock).
- **Salt:** 16 random bytes. Deviation from fork: **raw binary** (`newSalt()`), not hex — teleproto port keeps bytes end-to-end; manifest stores raw bytes. Fork's hex indirection dropped deliberately.
- **Secretstream per chunk:** one XChaCha20-Poly1305 stream per chunk — `init_push` header (24 B) prepended, single `push` sealed with `TAG_FINAL` (fork's last-block-FINAL collapses to always-FINAL since a chunk is one message). `decryptChunk` requires the FINAL tag and fails loud otherwise.

## Delivered

| File | Role |
| --- | --- |
| `src/Backup/VaultCrypto.php` | `newSalt(): string` (16 B random) · `deriveKey(passphrase, salt16): string` (32 B Argon2id, fork params) · `encryptChunk(key32, plaintext): string` (header ‖ TAG_FINAL ciphertext, binary) — rejects empty plaintext (`InvalidArgumentException`, contract: `Chunker::split` never yields empty chunks) · `decryptChunk(key32, blob): string` — `RuntimeException` "Decryption failed: …" on truncated header/body (≤ 24 B), tampered header/ciphertext, wrong key, missing FINAL tag. Key-length guards both sides. |
| `src/Backup/Chunker.php` | Pure, no I/O: `split(data, size): list<{hash: sha256-hex, data}>` (str/substr boundaries; `size < 1` → `InvalidArgumentException`; empty data → `[]`) · `reassemble(list<string>): string` · `dedupIndex(list): map hash→first-index` (array_key_exists keeps first occurrence). |
| `tests/Backup/VaultCryptoTest.php` | 18 tests: salt 16 B + uniqueness; key 32 B, deterministic-per-salt, salt/passphrase changes key; wrong salt length rejected; roundtrip @ 1/64/65536/65537 B; empty plaintext + wrong key size rejected (both fns); encryption nondeterministic; wrong-key / tampered-ciphertext / tampered-header / truncated (0/1/23/24 B) all throw `RuntimeException`. |
| `tests/Backup/ChunkerTest.php` | 21 tests: boundary matrix (1, size, size+1 … sizes 1 & 65536: `[8]→[8]`, `[8,8,1]` etc., per-chunk bytes verified against substr); empty → `[]`; size ≤ 0 rejected; hashes = sha256 hex of chunk data; identical chunks share hash; reassemble identity + empty; dedup first-index-wins incl. non-adjacent dups (`'xaybxa'`) + empty map. |

## Design decisions

- **Empty-chunk policy (asked to define):** `encryptChunk('')` throws — empty files produce zero chunks upstream (`split('', s) === []`), so an empty plaintext can only be a caller bug; fail loud at the boundary. Documented in both docblocks.
- **Key caching in tests:** Argon2id MODERATE (~0.6 s/derivation) — tests derive once per process (static cache) and reuse; only the determinism/salt-sensitivity/wrong-key cases pay extra derivations. Suite cost ≈ +2 s.
- **`ext-sodium` declared in composer.json** (`"ext-sodium": "*"`). Plan constraint named "ext-sodium + ext-argon2", but ext-argon2 (password_hash's Argon2i driver) is unused — Argon2id comes from libsodium's `crypto_pwhash`. Declaring an unused extension would tax consumers for nothing; deviation noted here. `composer.lock` is gitignored (path repo) — hash refreshed locally, validate clean.
- phpstan flagged my defensive `hash ?? null` guard in `dedupIndex` as dead against the declared shape — removed the guard, trusting the PHPDoc contract (pure function).

## Gates

- `composer test`: **243 tests, 9,888 assertions, 0 failures** (204 pre-existing + 39 new; 4 skips = P3's designed redis skips, unchanged).
- `composer analyse` (level 5 + disallowed-calls): `[OK] No errors`.
- Zero `preg_` in `src/` (phpstan rule + manual grep = 0); `strict_types=1` everywhere; sodium ext verified (`php -m`).
- No network in tests; no I/O in either class (pure per plan Task-1 scope).

**Next:** Task 2 (G1 ∥) builds `VaultInterface`/`InMemoryVault`/`TelegramVault` on top of these; Task 3's Runner consumes `Chunker::dedupIndex` for upload dedup.

# Phase 4: Backup Vault — Implementation Plan

> **For agentic workers:** REQUIRED SUB-SKILL: superpowers:subagent-driven-development. Groups in label order.

**Goal:** Encrypted, deduplicated, Telegram-channel backups: configured local sets → content-addressed chunks (Argon2id pass phrase → sodium secretstream) → private channel per set via a dedicated bot/session; manifest-first restore with no server-side index; staleness verifier. Ports the owner's sdd/backup designs onto teleproto primitives (MTProto file upload parts / messages).

**Architecture:** `VaultInterface` (putChunk/getChunk/putManifest/getLatestManifest) behind `TelegramVault` (one private channel per backup set, titled `teleproto-backup:<setId>`); `Chunker` (fixed-size split + sha256 content addressing + dedup index); `VaultCrypto` (Argon2id key from passphrase+salt, secretstream XChaCha20-Poly1305 per chunk); `BackupRunner` (scan set → chunk → dedup → upload unique → post manifest last); `Restorer` (latest manifest → chunks → decrypt → rebuild); `Verifier` (random-chunk re-download + hash). Provisioner creates bot+channel (BotFather flow documented; v1: manual/assisted — fork's auto-BotFather is v8-era complexity, defer).

**Port reference (read-only):** fork branch `sdd/backup` — `git show sdd/backup:src/Backup/<File>.php` etc.; audit noted src/Vault/{TelegramVault,Crypto,Restorer,Verifier,BackupRunner}.php, VaultInterface, InMemoryVault fake.

**Spec:** roadmap P4. Constraints: standard (zero preg_, strict_types, MIT, no network in tests — VaultInterface faked; ext-sodium + ext-argon2 declared).

## File Structure
```
src/Backup/VaultInterface.php, TelegramVault.php, InMemoryVault.php (test fake ships as tool)
src/Backup/VaultCrypto.php, Chunker.php, BackupRunner.php, Restorer.php, Verifier.php
src/Console/BackupCommand.php (login/status/run/restore/verify subactions)
config += 'backup' => [sets, chunk_size, channel_prefix, bot_session]
docs/backup.md, CHANGELOG
```

### Task 1 (G1): Crypto + Chunker (pure)
**Produces:** `VaultCrypto::deriveKey(passphrase, salt16): string` (sodium_crypto_pwhash_str? NO — raw key: sodium_crypto_pwhash MODERATE via crypto_pwhash with SODIUM_CRYPTO_PWHASH_ALG_ARGON2ID13, 32-byte), `encryptChunk(key, plaintext): string` / `decryptChunk` (secretstream init/push/final — one stream per chunk, header prepended), `newSalt(): string`. `Chunker::split(path|string, size): list<{hash sha256, data}>` (pure string fns), `dedupIndex(list): map hash→first-index`, `reassemble(list<string>): string`. Tests: roundtrips, tamper fails, salt uniqueness, chunk boundary math, dedup identity.

### Task 2 (G1 ∥ 1): Vault layer
**Produces:** `VaultInterface` (putChunk(string $hash, string $bytes): string msgId; getChunk(hash): string; putManifest(string $json): string; getLatestManifest(): ?array). `InMemoryVault` (assoc store, manifest stack). `TelegramVault`: __construct(UserAccountScope|BotAccountScope $scope, string $setId) — channel resolution: `search`/dialogs by title prefix `teleproto-backup:<setId>` (normalize title constraints, string fns) else `createChannel` (channels.createChannel broadcast, title, about) then store channel_id; putChunk → message with chunk file: upload via teleproto (upload.saveFilePart loop from bytes then messages.sendMedia inputMediaUploadedDocument w/ file name = hash) — implement against teleproto's real upload surface (StorageMedia pattern; read src/Media/StorageMedia.php + UserAccountScope::sendMedia); getChunk → messages.getHistory search by hash filename + upload.getFile download parts; manifest as plain message (text, marker prefix `TBMANIFEST1:` + json, base64). All teleproto calls behind an injectable callable map for tests (offline); real path exercised only in live-gated test (skip w/o env TELEGRAM_CLIENT_LIVE).
Tests: InMemoryVault semantics incl. manifest latest-wins; TelegramVault offline tests with fake callables (channel create-then-find, chunk roundtrip via fake upload, manifest latest).

### Task 3 (G2): Runner + Restorer (uses T1+T2)
**Produces:** `BackupRunner::run(setConfig{paths, excludes, pre_command?}, VaultInterface, VaultCrypto): array{manifest, uploaded, deduped, bytes}` — walk paths (RecursiveDirectoryIterator, string-fn excludes), read each file, chunk+encrypt, dedup by (hash) against vault (manifest carries per-file chunk hash list + original size + salt per set), upload unique, finally putManifest (salt included). `Restorer::restore(VaultInterface, VaultCrypto, passphrase, targetDir): array` — getLatestManifest, decrypt+reassemble each file, write (mkdir -p). Tests: tmpdir roundtrip full, dedup second run (uploaded=0 for unchanged), exclude honored, wrong passphrase fails loud.

### Task 4 (G3): Verifier + CLI + docs
**Produces:** `Verifier::verify(VaultInterface, VaultCrypto, int $sampleN): array{checked, ok, missing}` — re-download N random chunks, hash-compare. `telegram-client:backup` command: subactions via first arg {run,restore,verify,status} + --set=; wires config sets→Runner/Restorer/Verifier with real TelegramVault behind a factory (injectable for tests; status = latest manifest summary + staleness date). docs/backup.md (setup: dedicated session/bot, channel provisioning manual steps, config example, sizes, security notes: Argon2id + XChaCha20-Poly1305, manifest-first restore). CHANGELOG. Gates + phase review.

## Parallel Dispatch Summary
G1: 1 ∥ 2 · G2: 3 · G3: 4 + final review.

# Changelog

All notable changes to this project are documented here. The format is
based on [Keep a Changelog](https://keepachangelog.com/en/1.1.0/).

## [Unreleased]

### Added — Ingest (Phase 2)

- `TelegramClient` public facade: `ingest(update, accountId)`,
  `ingestResponse(method, params, response, accountId)` and
  `user(accountId, tgId)`; bound as a singleton by the service provider.
- `UpdateIngestor`: metamodel-driven recursive ingest of raw TL payloads
  (anchor / instance / child rows, tenant-scoped, idempotent) plus
  `ingestResponse` route wiring — update-kind payloads always become
  instances; method responses dedup through the generated `tl_route_*`
  tables (seen → returns the stored instance; unseen → ingest + mark).
- `EntityAggregator`: `user()` / `chat()` / `channel()` resolve the anchor
  for a referenced entity by (tenant, telegram id) with its current
  instance loaded (`currentInstance` relation); null for unknown or
  deleted entities.
- `RouteIdempotency`: deterministic route keys (sorted-JSON, method- and
  account-namespaced), mark/seen/storedId primitives against the generated
  route tables.
- `UpdateStored` Laravel event: fired after the root ingest transaction
  commits with the committed model and account id.
- `docs/ingest.md`: API, tenancy model, events, route semantics,
  idempotency guarantees, sqlite-vs-PG notes.

### Added — Bus, Daemon & Backfill (Phase 3)

- Bus: `StreamSchema` (canonical entry codec + wire names),
  `RedisStreamSink` (teleproto sink → `tg:stream:updates`),
  `RedisConnectionContract` + `LaravelRedisAdapter` (predis/phpredis),
  `RouteTable` (prefix-only routes, zero regex), `HotReloadRouter`
  (`tg:bus:reload` push signal), `IngestConsumer` (group reader →
  forward / ingest / dead-letter, ack-per-entry).
- `telegram-client:ingest` artisan command (`--once` / `--max` loop,
  pcntl-graceful).
- `AccountWorker`: one account's supervised teleproto poll loop —
  FloodWait → interruptible sleep, DC migration → scope rebuild at the
  new DC, 3-strike-unexpected → rethrow; difference cursor survives
  restarts (`lastSequenceState()`).
- `Daemon`: sequential multi-account supervisor — round-robin time
  slices, per-account failure isolation with a 2/5/15/60s backoff
  ladder, SIGTERM/SIGINT graceful (exit 0), all-fail exit 1 for the init
  system; no redis inside (sinks injected by the host bootstrap —
  pattern + systemd unit in docs/bus.md).
- `telegram-client:backfill` artisan command: FetchQueue + quota-sliced
  `BackfillWorker` (fork port) per peer — headroom rule, flood-aware,
  dead-lettering; pages stored via the P2 ingest surface. v1
  report-only (offset cursors printed, not persisted).
- `FetchQueue::requeue()`: deferred-claim primitive (budget stop keeps
  the peer at the queue front without attempt accounting).
- `config/telegram-client.php`: `bus`, `daemon` (account registry) and
  `backfill` sections.
- `docs/bus.md`: stream schema, routes + reload protocol, ingest
  command, daemon bootstrap + systemd, backfill semantics.

### Added — Backup Vault (Phase 4)

- `VaultCrypto` (Argon2id13 passphrase → 32-byte key, 16-byte salt;
  per-chunk XChaCha20-Poly1305 secretstream sealed FINAL) and `Chunker`
  (fixed-size split, sha256 content addressing, dedup index) — the pure
  crypto/chunking substrate.
- `VaultInterface` + `InMemoryVault` (offline fake) + `TelegramVault`:
  one private channel per set (`teleproto-backup:<setId>`, find-or-
  create), chunks as hash-named force-file documents, manifests as
  `TBMANIFEST1:` text messages (latest wins); every teleproto call
  behind an injectable call map — tests run offline.
- `BackupRunner` (scan → chunk → encrypt → dedup → upload uniques →
  manifest last; salt reuse makes the second unchanged run upload zero)
  and `Restorer` (manifest-first, traversal-proof, mkdir -p rebuild).
- `Verifier`: keyless availability sampling (`{checked, ok, missing}`,
  injectable rng for determinism) — integrity is structural (secret-
  stream FINAL fails loud at restore); `verifyWithKey()` upgrades to
  full decrypt + sha256 when the passphrase is at hand.
- `telegram-client:backup` artisan command (`run|restore|verify|status`,
  `--set/--passphrase/--target/--sample`); vault transport behind the
  `VAULT_FACTORY_KEY` container seam — `memory` driver (offline default,
  per-set shared InMemoryVault) or `telegram` via the P3
  `SCOPE_RESOLVER_KEY`/daemon.accounts registry. Passphrase from
  `--passphrase` or `TELEGRAM_CLIENT_BACKUP_PASSPHRASE`, never logged.
- `config/telegram-client.php`: `backup` section (driver, account,
  chunk_size, sets).
- `docs/backup.md`: architecture, dedicated-session setup, config, CLI,
  verifier semantics (availability vs integrity), security notes, limits.

### Fixed — Backup Vault review wave

- `tests/Backup/LiveVaultSmokeTest.php`: live-gated smoke for the
  telegram driver (reviewer I1) — skipped unless `TELEGRAM_CLIENT_LIVE=1`
  and a session resolves (teleproto test-e2e env pattern:
  `EnvFile::read` on `../teleproto/.env`, getenv fallback); dated
  `teleproto-smoke-<date>` set via `forScope`, 1 KB putChunk/getChunk
  roundtrip + manifest put/getLatest against the real scope call map.
- `docs/backup.md`: prominent passphrase-rotation warning (new
  passphrase ⇒ new set id/channel; dedup keys on plaintext hash so old
  ciphertext would be reused into a mixed-key set), confirm-guess
  security note on plaintext-hash chunk names (low severity, private
  channel), limits entries (orphaned chunks never GC'd; telegram driver
  live-tested only via the smoke).
- `TelegramVault` docblock corrected: chunk names are the plaintext
  content hash, not a ciphertext hash.

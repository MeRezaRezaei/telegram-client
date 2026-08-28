# Task D report — AI surface (llms.txt + AGENTS.md)

Commit context: master @ b612676 (301 green). Files owned and written: `llms.txt`, `AGENTS.md` (repo root). No other files touched; nothing committed.

## llms.txt

llmstxt convention (H1 + blockquote summary + H2 Docs/Quickstart/API/Capabilities/Constraints). Every API claim verified from source:

- **Ladder position**: teleproto = engine (wire, sessions, pollers, typed RPC errors); this package = client layer (storage truth, bus, supervision, backfill, backup). Live wire stays behind `TELEPROTO_LIVE` tri-state + `TELEGRAM_API_ID/HASH`.
- **Install/env**: composer require (provider auto-discovered; config merged — provider registers no `publishes()`, verified in `TelegramClientServiceProvider::register()`, so the Quickstart says "override by creating config/telegram-client.php", no vendor:publish). Env vars listed from `config/telegram-client.php`: `TELEGRAM_CLIENT_REDIS`, `TELEGRAM_SESSION_<ID>`, `TELEGRAM_CLIENT_BACKFILL_BUDGET`, `TELEGRAM_CLIENT_BACKUP_*`, `TELEGRAM_CLIENT_SHIP_NAMESPACES`, `TELEGRAM_CLIENT_LIVE`.
- **Core API** (from `src/TelegramClient.php`, `src/Ingest/*`): `ingest`/`ingestResponse`/`user` signatures verbatim; `EntityAggregator::chat()/channel()`; `UpdateStored` post-commit, once per write pass; route dedup = (method, sorted-JSON params, account), update-kind payloads bypass routes. Bus consts from `StreamSchema` (`tg:stream:updates`, `tg:bus:routes`, `tg:bus:reload`, `tg:stream:dead-letter`); `RouteTable` prefix-only; `HotReloadRouter` listen/refresh; `IngestConsumer::consumeOnce` → {processed, forwarded}. Daemon: `TICK_SECONDS=30`, ladder `[2,5,15,60]`, all-fail exit 1; `AccountWorker::lastSequenceState()` = {pts,date,qts,seq} resume cursor; accounts registry config. Backfill quota rule from `BackfillWorker`: ≤ `intdiv(budget,2)` requests (50% headroom), FLOOD_WAIT `min(s,3600)`, 5-strike dead, plain ingest (not route-deduped), v1 report-only. Backup CLI: run/restore/verify/status, Argon2id13 + XChaCha20-Poly1305 secretstream, manifest-first restore, keyless vs keyed verify.
- **Storage truth**: anchor/instance/child (+route) rows, shared UUIDv7 PK, per-constructor instance tables; hard tenancy (account_id required on every call, no global mode); idempotency + constructor-transition families.
- **Constraints**: sync daemon (no event loop), dial 112/635 (verified `ls migrations | wc -l` = 112, `ls generated/migrations | wc -l` = 635), handlers belong to app, zero-preg.
- **Links**: README.md (parallel implementer's deliverable), docs/ingest.md, docs/bus.md, docs/backup.md, ../teleproto/skills/telegram-methods (exists, verified).

## AGENTS.md

For coding agents ON this repo, mirroring teleproto's AGENTS.md style:

- Architecture map table: Schema generators (`src/Schema/`), generated layer (`generated/` + `migrations/`) — NEVER hand-edit, regenerate via `php bin/regenerate [--ship]` (flags from `bin/regenerate` header: `--force`, `--schemas`, `--out`); dial widening via `ship_namespaces` + `--ship`; off-dial entity anchors via `UpdateIngestor::entityMigrationPaths()`; Ingest; Bus; Daemon; Backfill; Backup; public face.
- Hard rules: zero-preg, generated-artifact rule, sessions-are-credentials, live-wire-belongs-to-teleproto.
- Gates: `composer test` (301 tests / 10055 assertions / 5 skipped live-gated — re-verified green), `composer analyse` (level 5 + preg ban — clean), live gates: `TELEGRAM_CLIENT_LIVE=1` for `tests/Backup/LiveVaultSmokeTest.php` (needs real session in `../teleproto/.env` or env; grep-verified) + `TELEPROTO_LIVE=true` for live-wire runs.
- Ledger locations: `.superpowers/p1..p4/` each `progress.md` + `task-N-report.md` (verified); spec/plan dirs `docs/superpowers/specs|plans/` (verified listing).
- teleproto path-repo link: composer repositories `../teleproto` symlink, `dev-main`; enumerated the teleproto surface consumed here (TeleprotoClient, UserAccountScope, UpdatePollerService methods, UpdateSinkInterface, FloodWait/DcMigration exceptions, SessionData) with the retest rule: public-surface change → `composer test`; wire-level change → live gates.

## Verification

- `composer test`: OK — Tests: 301, Assertions: 10055, Skipped: 5 (live-gated).
- `composer analyse`: [OK] No errors.
- Working tree: only `llms.txt`, `AGENTS.md`, `.superpowers/p5/` added; no commit made.

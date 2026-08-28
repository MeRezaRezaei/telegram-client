# AGENTS.md — working on the telegram-client repo

Guidance for coding agents editing this repository. Facts below describe the
package as shipped; when docs and code disagree, code wins.

## Architecture map

| Layer | Location | What it is |
| --- | --- | --- |
| Schema generators | `src/Schema/` | `RegenerateCommand` (artisan) + `Generator/` (TL parser → metamodel, Naming, migration/model/DTO/factory generators, manifest). Inputs: committed layer-227 `.tl` mirror in `schema/sources/`. |
| Generated layer | `generated/` + `migrations/` | **NEVER hand-edit** (`@generated`): 635 per-type migrations in `generated/migrations/`, Eloquent models, spatie DTOs, factories, `schema-manifest.json`; `migrations/` carries the curated dial (112 files) the provider registers via `loadMigrationsFrom`. Regenerate with `php bin/regenerate` (add `--ship` to copy the dial into `migrations/`; `--force` bypasses the ±30 % sanity gate; `--schemas`/`--out` redirect in/out). To widen the dial: edit `ship_namespaces` (config or `TELEGRAM_CLIENT_SHIP_NAMESPACES`) and re-run with `--ship`. Root-namespace entity anchors are off-dial by design — `UpdateIngestor::entityMigrationPaths()` migrates them table-driven off the shipped manifest (extend that list, not the dial, for new entity surfaces). |
| Ingest | `src/Ingest/` | `UpdateIngestor` (raw TL arrays → anchor/instance/child rows, bottom-up writes, route dedup), `EntityAggregator` (`user`/`chat`/`channel` with `currentInstance`), `PayloadWalker`, `RouteIdempotency`, `Events/UpdateStored` (fires post-commit, once per actual write pass). |
| Bus | `src/Bus/` | `StreamSchema` (canonical `{account_id, update, ts}` codec + wire consts), `RedisStreamSink` (teleproto `UpdateSinkInterface`), `RouteTable` (prefix-only matching over the `tg:bus:routes` hash), `HotReloadRouter`, `IngestConsumer`, `LaravelRedisAdapter` + `RedisConnectionContract`. |
| Daemon | `src/Daemon/` | `Daemon` (round-robin supervisor, 30 s ticks, 2/5/15/60 s isolation ladder, all-fail → exit 1), `AccountWorker` (per-account poll loop: FloodWait sleep, DC-migration scope rebuild, 3-strike rethrow; `lastSequenceState()` cursor), `AccountPoller`, `WorkerInterface`. Sync PHP — no event loop, no redis inside the daemon (sink injected by the host bootstrap). |
| Backfill | `src/Backfill/` + `src/Console/BackfillCommand.php` | Quota-sliced `messages.getHistory` loop (`BackfillWorker`: ≤ `intdiv(budget, 2)` requests per run — 50 % headroom for live traffic; FLOOD_WAIT capped at 3600 s; 5 consecutive failures → dead) + `FetchQueue`. Container seams: `SCOPE_RESOLVER_KEY`, `INGESTER_KEY`. |
| Backup | `src/Backup/` + `src/Console/BackupCommand.php` | Encrypted channel vault: `BackupRunner` (content-addressed chunks, manifest last), `VaultCrypto` (Argon2id13 + XChaCha20-Poly1305 secretstream), `TelegramVault`/`InMemoryVault`, `Restorer`, `Verifier` (keyless sampling; `--passphrase` → full integrity). CLI `telegram-client:backup run|restore|verify|status`. |
| Public face | `src/TelegramClient.php` | Thin singleton: `ingest` / `ingestResponse` / `user`; bindings + config in `TelegramClientServiceProvider`. |

## Hard rules

- **Zero regex in `src/`**: `preg_*()` is banned (phpstan `disallowedFunctionCalls`, mirrors teleproto). Use `sscanf`, `str_*`, or the TL tokenizer. `bin/` and `tests/` follow the same discipline.
- **Generated artifacts are regenerated, never edited**: everything under `generated/` and `migrations/` comes from `php bin/regenerate [--ship]`; hand edits are overwritten on the next run.
- **Session strings are credentials**: `.env` / `TELEGRAM_SESSION_*` values never get committed; the test suite never requires real credentials.
- **The live wire belongs to teleproto**: this package never forces the network on — live scopes stay behind `TELEPROTO_LIVE` (tri-state) + `TELEGRAM_API_ID`/`TELEGRAM_API_HASH`, with per-account `api_id`/`api_hash` overrides in `daemon.accounts`.

## Gates

Run before declaring work done:

```bash
composer test      # phpunit suite (in-memory sqlite; must stay green)
composer analyse   # phpstan level 5 + disallowed-calls (preg_* ban)

# Live gates (opt-in, real credentials):
TELEGRAM_CLIENT_LIVE=1 vendor/bin/phpunit tests/Backup/LiveVaultSmokeTest.php
#   — needs a real session in ../teleproto/.env or the environment
TELEPROTO_LIVE=true ... # daemon/backfill/live-wire runs
```

## Specs, plans and ledgers

- Design specs: `docs/superpowers/specs/` (master roadmap); implementation plans: `docs/superpowers/plans/` (`2026-08-28-p1-schema-mirror.md` … `p4-backup-vault.md`). Read the relevant plan before touching the schema pipeline or ingest semantics.
- Phase ledgers: `.superpowers/p1/` … `.superpowers/p4/` — each holds `progress.md` plus per-task reports (`task-N-report.md`). New phase work continues the pattern; do not rewrite closed ledgers.

## teleproto dev link

`composer.json` requires `merezarezaei/teleproto: ^1.1` from Packagist. For local dev against a teleproto checkout: `composer config repositories.teleproto path ../teleproto` (untracked). Consequences:

- Changes to teleproto's public surface consumed here — `TeleprotoClient`, `UserAccountScope`, `UpdatePollerService` (`pollUser`, `secondsToWait`, `set/getSequenceState`), `UpdateSinkInterface`, `FloodWaitException`/`DcMigrationException`, `SessionData` — require re-running `composer test` here immediately (the suite exercises all of them through injected fakes and the live seams).
- Wire-level teleproto changes (transport, auth, schema artifacts) additionally require the live gates above before trust.
- `../teleproto/skills/telegram-methods/` documents the engine's method surface; consult it before wiring new RPC calls.

# Task B report — docs/quickstart.md + docs/index.md

Wave: presentation wave, Implementer B (parallel with A/C/D).
Base: master @b612676.

## Delivered

- `docs/quickstart.md` — 4 recipes, each with a when-to-use line:
  1. First update → Postgres row (28 lines) — `teleproto:login` wizard,
     `daemon.accounts` config, daemon bootstrap pointer (bus.md),
     `telegram-client:ingest --once`, `TelegramClient::user()` +
     `currentInstance->first_name` query.
  2. Route updates with hot reload (25 lines) — `RouteTable::set()`,
     `publish tg:bus:reload 'reload'`, consumer forwards verbatim to the
     target stream.
  3. Backfill within quota (22 lines) — `--account`/`--peer=*`/`--budget`
     flags, 50% headroom rule, what lands in DB (always-instances ingest,
     no route dedup), report-only cursors.
  4. Encrypted backup (31 lines) — config set, `run`/`verify`/`restore`
     CLI, rotation-trap warning pointer.
- `docs/index.md` — one-page TOC: quickstart, ingest, bus, backup,
  ../teleproto/docs (engine-level), CHANGELOG.

## Verification

- Every printed signature checked against source before printing:
  `TelegramClient::user/ingest/ingestResponse` (src/TelegramClient.php),
  command signatures (BackfillCommand:40, BackupCommand:38,
  IngestCommand:22), `RouteTable::set(string,string): void` +
  container auto-wiring, `TlUser` anchor + `currentInstance` relation,
  migration auto-load (`loadMigrationsFrom`), no shipped daemon command
  (bus.md bootstrap is host-provided — phrased accordingly).
- Recipe line budget: 28/25/22/31 (cap 35) — measured.
- `composer test`: OK — 301 tests, 10055 assertions, 5 skipped
  (live-gated). No live gate run (docs-only change).

## Notes

- Not committed (per instructions). Files: docs/quickstart.md (new),
  docs/index.md (new).
- Skipped tests are the pre-existing live-gated set (TELEGRAM_CLIENT_LIVE).

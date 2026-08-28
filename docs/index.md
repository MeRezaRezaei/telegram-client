# telegram-client docs

A Laravel package that turns teleproto's raw MTProto truth into
tenant-scoped Postgres rows, streams updates over a Redis bus, and
vaults encrypted backups into Telegram channels.

| Doc | What it covers |
| --- | --- |
| [quickstart.md](quickstart.md) | Four copy-paste recipes: first update → Postgres row, hot-reload routing, quota-aware backfill, encrypted channel backup. |
| [ingest.md](ingest.md) | The ingest surface: `TelegramClient::ingest` / `ingestResponse` / `user`, tenancy model, route dedup, idempotency guarantees, events. |
| [bus.md](bus.md) | The Redis stream bus: stream schema, route table + reload protocol, `telegram-client:ingest` consumer, multi-account `Daemon`, backfill command, systemd unit. |
| [backup.md](backup.md) | The encrypted vault: chunking, Argon2id + secretstream crypto, manifest-first restore, verify semantics, security notes and limits. |
| [../teleproto/docs/](../teleproto/docs/index.md) | Engine-level docs for the underlying teleproto MTProto client: user/bot clients, login, scaling, Passport. |
| [CHANGELOG.md](../CHANGELOG.md) | Release history. |

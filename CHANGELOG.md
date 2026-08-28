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

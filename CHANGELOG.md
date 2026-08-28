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

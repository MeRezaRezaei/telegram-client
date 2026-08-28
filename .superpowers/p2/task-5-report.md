# P2 Task 5 Report — Entity aggregator, response routing, public API, docs

**Status:** DONE — commit `96b7b99` "feat(ingest): public API, entity aggregator, response routing, docs"
**Gates:** phpunit **OK (115 tests, 9457→9516 assertions; 101 baseline + 14 new)** · phpstan level 5 + disallowed-calls **[OK]** · zero `preg_` in `src/` · no network (canned payloads only)

## What shipped

### 1. Response routing on the public path — `UpdateIngestor::ingestResponse(method, params, response, accountId): ?TlInstanceModel`

Wired per T4's notes, in this order:

1. `RouteIdempotency::isUpdatePayload($response)` branches **before** any route logic — update-kind payloads always become instances (verified against `updates.getDifference`, which HAS a route table that stays empty while the update ingests twice and `UpdateStored` fires both times).
2. Route table absent for the method (`Schema::hasTable(RouteIdempotency::tableFor($m))` — generic/vector returns like `users.getUsers` have none; the generator skips them) → ingest unconditionally, no throw.
3. `keyFor(method, params)` → `RouteIdempotency::storedId(...)` (new primitive: the route row's PK, i.e. the stored response instance id) — seen → resolve and return the stored instance through the duplicate response's constructor tables (`storedInstance()`, null if the response family drifted); unseen → `ingest()` + `mark()` + return the fresh root. A response already recorded under another route (byte-identical content-aggregated root reached via different params) is NOT re-marked — the route-table PK is the instance id, so a second row would violate it.

Test suite (`IngestResponseTest`, 5): ingest+mark (route row PK = root id, sidecar user addressable via aggregator), duplicate → returns the SAME instance, all row counts stable, exactly 1 `UpdateStored`; tenant scope (same params under account 8 → own route row + own root); update-bypass; unrouted method ingests unconditionally.

### 2. `src/Ingest/EntityAggregator.php` — user/chat/channel aggregation

`user/chat/channel(accountId, tgId): ?TlAnchor` resolving the anchor by (tenant, telegram id) across the constructor family (User: `user`+`userEmpty`; Chat: `chat`+`chatEmpty`+`chatForbidden`+`channel`+`channelForbidden`) with the **CURRENT instance** loaded as the `currentInstance` relation: the row matching the anchor's constructor discriminator (latest constructor — survives same-second timestamp ties on sqlite), skipping deleted-flagged instances (`User.deleted` flags.5 → resolves null). Channels are Chat-namespace anchors in TL truth — `channel()` is the intent-revealing alias of `chat()`, same rows. Identity lookups pin the anchor through `account_id` (tenant-scoped; account 8 → null for account 7's user, own anchor after its own ingest).

Tests (`EntityAggregatorTest`, 6): found + fields readable through `currentInstance`; unknown → null; tenant scoping both directions; user→userEmpty transition flips `currentInstance` AND the anchor discriminator; deleted-only user → null; chat + channel resolve the same anchor with channel fields readable.

### 3. Public API — `src/TelegramClient.php`

Container-resolvable root class with `ingest(array $update, int $accountId)`, `ingestResponse(string $method, array $params, array $response, int $accountId)`, `user(int $accountId, int $tgId)` delegating to the singletons. Provider binds `UpdateIngestor`, `EntityAggregator`, `TelegramClient` as singletons. `config/telegram-client.php` gained a keys docblock (`schema_sources`, `ship_namespaces`). Tests (`TelegramClientTest`, 3): container singleton resolution, update ingest + entity lookup delegation, response ingest delegation.

### 4. Docs

- `docs/ingest.md`: API (code sample), tenancy model (account_id everywhere, no global mode), `UpdateStored` event semantics (once per write pass; dedup-skip does not re-fire), route semantics (which methods benefit — getters; update-kind branch; unrouted methods; shared-instance note), idempotency guarantees (update re-ingest byte-stable no-op; route dedup; anchor-family transitions; deleted entities), sqlite-vs-PG note (bottom-up writes satisfy immediate FKs on both; PG-only features in CI).
- `CHANGELOG.md` created with an Unreleased section covering the P2 ingest surface.

## T3 gap found and fixed inside UpdateIngestor (T5-owned wiring file)

- **Constructor transitions minted a second anchor:** `existingAnchorId` looked only in the current constructor's instance table, so `user` then `userEmpty` (same telegram id) created two anchors. Fixed with `familyInstanceTables()` (exact map anchor-table → instance tables off the metamodel via `Naming::anchorTable`/`instanceTable`, no name guessing): on a primary miss the identity is resolved through migrated family siblings that carry the column (`Schema::hasTable`/`hasColumn` guarded). One anchor per (tenant, telegram id) across the family — pinned by the transition test.
- **Anchor discriminator now follows the current constructor** (`constructor_id`/`constructor_name` refreshed on reuse when the ctor changed) — the anchor tells the truth about its instance family; T3 tests unaffected (same-ctor re-ingests don't touch it).

## Deviations / decisions

- Demo/fixture method is `messages.getHistory` → `messages.messages#1d73e7ea` (dial-covered root, route table exists, sidecar `users`/`chats` vectors exercise ref-vector children + off-dial entity anchors). `users.getFullUser` was rejected: its response drags PeerSettings/PeerNotifySettings namespaces whose tables are off-dial and unmigrated.
- "Latest constructor" is discriminator-based, not timestamp-based (sqlite second-granularity makes ties common); timestamps remain the fallback when the discriminator row is absent.
- `EntityAggregator` returns null (not a bare anchor) when no current instance resolves — an anchor whose only instance is deleted is not an addressable entity.
- One transient phpunit anomaly (a single run printed 221 tests / 2465 assertions); cache cleared and three sequential full runs all report **115 / 9516 OK** — suite verified stable.

## Phase 2 complete

All five plan tasks done; phase-final review can close P2.

# P2 Task 3 Report — Recursive relational write (nested payloads)

**Status:** DONE — commit `6fa711b` "feat(ingest): recursive nested writes, child vectors, events, tenant isolation" · phpunit **OK (101 tests, 9457 assertions)** (95 post-Task-4 baseline + 6 new `NestedIngestTest`) · phpstan **[OK]** (level 5 + disallowed-calls) · zero `preg_` in `src/`.

## What was built

- `src/Ingest/UpdateIngestor.php` — rewritten from the Task-1 flat map to **metamodel-driven** recursive ingest:
  - `constructors()` loads the P1 metamodel once (static cache) via `SchemaRegenerator::loadScheme()` over the committed `schema/sources/*.tl`; ctor → crc32 id (scheme truth), anchor/instance/child model classes via `Naming`/`ModelGenerator::childModelClass`. Any scheme constructor is ingestable wherever its tables are migrated — the hardcoded `user`-only map is gone.
  - `ingest()` runs the Task-2 **PayloadWalker** (parents-before-children) and writes **bottom-up** (reversed node order), so every immediate FK is satisfied without deferrable constraints (sqlite ignores DEFERRABLE): deepest anchors/instances first → parent ref columns (`from_id`, `peer_id`, `media`, `photo`, root `message`) hold already-written child instance PKs → vector **child rows after** their parent instance exists (`parent_id` FK). All inside one `DB::transaction`.
  - **Identity rules:** `id` param (→ `tl_id`) or a lone identity ref param (`peerUser`/`peerChannel`/`peerChat`) → anchor per (account, telegram id) — tl_id-aggregation for referenced entities, tenant-scoped through the instance table + anchor `account_id`. Identity-less ctors (entities, paramless shapes like `chatPhotoEmpty`/`messageMediaEmpty`, update roots) **aggregate by content**: identical column set under the same tenant reuses the row → full re-ingest is a stable no-op.
  - **Vectors:** ref-vector elements → child row `(parent_id, idx, value_id→instance)`; scalar-vector elements → the generated child `value` column (ref- and scalar-vector column sets are disjoint per generated DDL). `(parent_id, idx)` unique slot is upserted — child row ids and value links stay stable across re-ingests.
  - Loud failures: scheme-unknown ctor, missing generated model, and **table-not-migrated** (`assertTableReady`, names the constructor — `userStatusOnline` now fails as "not migrated", not as a raw QueryException).
- `src/Ingest/Events/UpdateStored.php` — `public readonly TlInstanceModel $model, int $accountId`, `Dispatchable`+`SerializesModels`; fired **after the root transaction commits**.
- `UpdateIngestor::entityMigrationPaths()` — now **manifest-driven** (table → migration file off `generated/schema-manifest.json`) over the anchor set the surface writes: `tl_user, tl_chat, tl_chat_photo, tl_message, tl_message_entity, tl_message_media, tl_peer, tl_update` (no filename drift possible).

## P1-generator gap found and fixed (constraint-compliant: generator fix + regenerate, no hand-edits)

- Generated **child models lacked `public $timestamps = false`** while child tables carry no timestamps columns — any child-row write (Task 3 is the first) died on `updated_at`. TDD pin first (`ModelGeneratorTest::test_vector_child_method_and_model`), then `ModelGenerator::childModel()` emits the flag; `php bin/regenerate --ship` refreshed 614 generated child models (635 migrations untouched — DDL unchanged; manifest hash `f7b5c70f88df`; Regeneration/ShipDial goldens green).

## Tests (`tests/Ingest/NestedIngestTest.php`, 6)

Canned v227 wire payloads: full `updateNewMessage#1f2b0afd` → `message#7600b9d3` (`from_id` peerUser, `peer_id` peerChannel, `media` messageMediaEmpty, `entities` vector: bold/url/mentionName) plus the difference-stream sidecars MTProto delivers alongside it (`channel#1c32b11c` with required `photo` chatPhotoEmpty ref, `user#31774388`) — all through the same generic `ingest()`:

1. E2E tree: anchors for update/message/peer/chat/user namespaces; verbatim columns (message id+text, channel id+title+verified, user id); ref columns resolve to child instances (root.message, from_id, peer_id, media, channel.photo).
2. Entities child rows: `idx` 0,1,2 order via `tlChild`, value_ids → correct ctor instances (reserved-word `offset` → `tl_offset` honored).
3. `UpdateStored` fired once with the committed root model + accountId (`Event::fake([UpdateStored::class])` — a blanket fake would swallow Eloquent `creating` hooks/UUIDv7 assignment).
4. Tenant isolation: same payloads under account 8 → separate anchors (update/message/chat/user ×2, 1 per account), disjoint child value sets, account 7 view untouched.
5. Idempotency: full re-ingest → 17 table counts stable, root/message uuids reused, child row ids + value links byte-stable.
6. Root without `_` fails loudly.

## Deviations / decisions

- **updateNewMessage cannot embed User/Chat objects** (scheme v227: `from_id`/`peer_id` are `Peer` refs carrying only ids). The chat/user anchors come from the sidecar entity payloads exactly as `updates.getDifference` delivers them — one generic surface, honest MTProto shape. The task brief's "inputPeerChannel" reading (peer embedding a channel object) does not exist in the scheme.
- **Content aggregation trade-off:** identity-less nodes are shared per tenant when their full column set matches (e.g. the same bold entity text-range across messages). Distinct identical content (two bold `[0,5]` in one message) is impossible for entities (offsets differ); documented as aggregation semantics, matching the roadmap "id-aggregation" intent.
- `migrate --path` REPLACES registered package paths (Task-1 note, kept): dial dir stays in `migrationPaths()`.
- E2E live gate (`./bin/teleproto test-e2e` in the teleproto repo) not applicable here; no network used (canned payloads only).

## Next hooks (Task 5)

`EntityAggregator` can resolve "current instance per anchor" straight off the written truth; `docs/ingest.md` should document identity rules (tl_id / lone identity refs / content aggregation), events, and tenancy.

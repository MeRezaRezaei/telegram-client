# telegram-client — Master Roadmap (plan of plans)

> Multi-phase program. This document locks scope, order, and cross-phase
> interfaces. Each phase gets its own implementation plan written
> just-in-time (against the previous phase's real output) under
> `docs/superpowers/plans/`, executed via subagent-driven-development.

## Goal

A stand-alone, MIT, mid-level Telegram client for Laravel consuming
`merezarezaei/teleproto` (low-level engine). Telegram updates are the
ultimate truth: ingest → Postgres (relational, multi-tenant/multi-account)
→ app code reads models. Redis bus with hot reload routes updates to
computing parts. One daemon controls all accounts. Bonus capabilities:
quota-aware history backfill, encrypted Telegram-channel backups.

Provenance: algorithms, designs and generators ported from the owner's
unpublished MadelineProto fork branches (his authorship; MIT by his
decision). Seams adapt from `danog\*` to teleproto.

## Non-goals

Handler DSLs / business logic (app's job — we emit Laravel events).
Event-loop async (teleproto constraint stands). Washing dishes.

## Phases

### P0 — Scaffold (done in this commit)
Repo, composer path-repo to ../teleproto, phpunit/phpstan+preg-gate, LICENSE.

### P1 — Schema mirror (port + adapt)
Port generators from fork `feat/clean-mtproto-extract:packages/laravel-telegram-schema`
(Generator/*: TlParser/TlCanon can shrink — teleproto ships TLSignatureParser;
keep metamodel, Naming, Migration/Model/Dto/Factory generators, Manifest,
Eloquent bases, RegenerateCommand). Input switches to teleproto's committed
layer-229 sources (schema/sources/*.tl). Namespace: MeRezaRezaei\TelegramClient\Schema.
Committed output: generated/ (migrations, models, DTOs, factories, manifest).
Curated-dial: full schema generates (data), but only curated subset ships in
`migrations/` by default (dial config) — full set optional publish.
Deliverable: `artisan telegram-client:regenerate` green + golden tests.

### P2 — TlIngest (the missing writer)
Update arrays (teleproto sink) → DTO dispatch (union) → Eloquent upserts
(anchor+instance+children, route idempotency, id-aggregation for
user/chat/channel entities). Multi-account: every anchor row tenant-scoped
(account_id). Deliverable: ingest any canned update → queryable relations.

### P3 — Redis bus + daemon + backfill
Port from fork `feat/laravel-mtproto-platform` + `sdd/sync`: Redis Streams
(tg:stream:updates), hot-reload routing (2-conn pattern), cross-account
dedup, `telegram-client:ingest` consumer, standalone daemon (systemd),
quota-sliced BackfillWorker (50% headroom, FLOOD_WAIT-aware via teleproto
exceptions, dead-letter). Deliverable: daemon ingests live account updates
into P2 storage; backfill fills history within quota.

### P4 — Backup vault (port)
From fork `sdd/backup`: content-addressed chunks, Argon2id + sodium
secretstream, manifest-first restore, verifier + staleness alerts,
BotFather/channel provisioner (v8 concept). Storage via teleproto
session + upload parts. Deliverable: backup/restore E2E against test
channel set.

### P5 — Presentation & release
README (positioning: the mid layer between teleproto and your app),
quickstarts, llms.txt, AGENTS.md, Packagist, v0.1.0 tag.

## Cross-phase interface contracts (locked)

- Input truth: teleproto `array<string,mixed>` updates (never DTOs cross the boundary INTO us).
- Storage truth: anchors/instances/children/route (P1 DDL); P2 owns all writes; P3+ only read.
- Events OUT: Laravel events carrying Eloquent models (app layer consumes).
- Bus: Redis Streams + reload signal channel; schema of stream entries frozen in P3 spec.
- Tenancy: account_id on every anchor; no global singletons keyed by telegram id alone.

## Licensing

MIT. Owner's fork code copied verbatim where self-contained; `danog\*`-coupled
seams rewritten. No AGPL headers ship.

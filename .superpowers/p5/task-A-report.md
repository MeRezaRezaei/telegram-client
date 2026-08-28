# Task A — README.md (presentation wave)

Implementer A · master @b612676 (working tree, uncommitted as instructed)

## What was done

Wrote `README.md` from scratch (no prior README existed). Every snippet and
number was verified against the repo before writing.

## Structure delivered

1. Centered hero: "Telegram updates become database rows your app already
   knows how to query." + badges (tests 301 passing, PHP >= 8.2, MIT).
   Used a static tests badge — `.github/workflows/` doesn't exist yet at
   review time (Implementer C's surface); swap to the workflow badge once
   the workflow filename lands.
2. Ladder diagram: your app → telegram-client (this) → teleproto → Telegram,
   with the explicit "teleproto = wire power / telegram-client = the client"
   positioning. Cross-checked against ../teleproto/README.md (no overlap:
   teleproto keeps wire/session/login; README here claims truth/bus/daemon/
   backfill/backup).
3. What-you-get grid: 6 sections, each with runnable verified snippets:
   - ingest via `app(TelegramClient::class)->ingest/ingestResponse`
     (src/TelegramClient.php:36,50) + `UpdateStored` event;
   - query via `TelegramClient::user()` (returns `?TlUser` with
     `currentInstance`) + `EntityAggregator::chat()/channel()`
     (src/Ingest/EntityAggregator.php:59-76);
   - bus route + reload (`tg:bus:routes` prefix hset, `tg:bus:reload`
     publish, `telegram-client:ingest`) — consts verified in
     src/Bus/StreamSchema.php;
   - daemon: daemon.accounts config + Daemon/AccountWorker story + systemd
     excerpt (condensed from docs/bus.md);
   - backfill command with real signature options (--account/--peer/--budget);
   - backup run/verify/restore with real signature options.
4. Install: `composer require merezarezaei/telegram-client`, teleproto
   auto-pulled, `teleproto:login`, migrations auto-load, config auto-merges
   (provider has no publishes tag — verified).
5. Config tour: daemon.accounts, bus.connection/redis_client, backup
   driver/account/sets.paths/excludes.
6. Honest tradeoffs: sync daemon not event-loop; dial ships 112 of 635
   (verified: migrations/ = 112, generated/migrations/ = 635, default
   namespaces = auth,messages,users,channels,updates,help,contacts);
   update handlers belong to your app (events only); backfill v1
   report-only; passphrase rotation = new set id.
7. AI-friendly pointer to llms.txt + skills/ (files owned by D, linked).
8. Docs links (docs/ingest.md, docs/bus.md, docs/backup.md, teleproto repo),
   testing (composer test), MIT license.

## Verified numbers

- 301 tests / 10,055 assertions (ran `composer test`: OK, 5 skipped =
  live-gated). 
- 3,116 DTO files in generated/Data; 2,928 models in generated/Models;
  manifest: layer 227, 3,678 tables, 1,535 FKs, 635 migrations generated,
  112 shipped.
- Commands verified in src/Console/{Ingest,Backfill,Backup}Command.php +
   src/Schema/RegenerateCommand.php (`telegram-client:regenerate --ship`).

## Notes / coordination

- Did NOT commit (as instructed). README references `LICENSE` file —
  confirm it exists at release (teleproto has one; C's composer surface
  may add it here).
- No subagents dispatched; only README.md touched (docs-only for the suite).

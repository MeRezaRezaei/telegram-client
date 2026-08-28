# generated/ vs migrations/ — what ships where

`generated/` is the FULL layer mirror: every migration, model, DTO and factory
for all 635 type migrations (3,678 tables) of the committed v227 scheme,
regenerated deterministically by `php bin/regenerate`. `migrations/` at the
package root is the CURATED publishable subset (plan Task 4): running
`php bin/regenerate --ship` copies — byte-identical, not re-derived — only the
per-type migration files whose TL namespace is on the dial
(`config('telegram-client.ship_namespaces')`, default `auth, messages, users,
channels, updates, help, contacts`; 112 files), which the service provider
publishes to Laravel apps via `loadMigrationsFrom`. Everything off-dial —
payments, phone, stickers, stats, stories, ... and the root-namespace types
(`User`, `Chat`, `Updates`, ...) plus the cross-namespace route-table and
deferred-FK files — exists ONLY here in `generated/`; consume the full set by
pointing your own migrator at `generated/migrations/`. To change what ships,
edit the config dial (or set `TELEGRAM_CLIENT_SHIP_NAMESPACES`) and re-run with
`--ship` — the full mirror is rewritten on every run either way.

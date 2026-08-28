# Task 4 Report — Curated Migration Dial (G2, final P1 task)

**Status:** DONE — 74/74 phpunit green · phpstan `[OK]` (level 5 + disallowed-calls) · zero `preg_` in `src/` · committed as `feat(schema): curated migration dial`.

## What was built

- **Config dial** (`config/telegram-client.php`): `ship_namespaces` default
  `['auth','messages','users','channels','updates','help','contacts']`, canonical
  default held in `SchemaRegenerator::DEFAULT_SHIP_NAMESPACES` (single source of
  truth; env override `TELEGRAM_CLIENT_SHIP_NAMESPACES="ns1,ns2"`).
- **`--ship` flag** on `bin/regenerate` + `RegenerateCommand`: after the full
  mirror lands in `generated/`, `SchemaRegenerator::shipMigrations()` copies the
  on-dial per-type migration files into `migrations/` at the repo root —
  **byte-identical copies** (in-memory content, global sequence numbers
  preserved), never re-derived. `--out` isolates the ship dir for tests/goldens.
  Non-ship runs never touch `migrations/`.
- **Provider**: `loadMigrationsFrom(__DIR__ . '/../migrations')` in
  `TelegramClientServiceProvider::boot()` — the publishable surface.
- **`generated/README.md`**: one-paragraph note on shipped vs full set.
- **Golden test** `tests/Schema/ShipDialGoldenTest.php` (7 tests).

## Selection semantics (decision)

Namespace membership is read from the **scheme** (`TlType::namespace()`), never
parsed back out of filenames — filenames are ambiguous (root type `Updates`
produces `create_tl_updates_table.php`). Consequences, all intentional and
documented in `generated/README.md`:

- Shipped: 112 per-type files (auth 9, messages 64, users 3, channels 5,
  updates 3, help 20, contacts 8).
- Root-namespace types (`tl_user`, `tl_chat`, `tl_updates` container, …) stay in
  the full set only.
- The cross-namespace monolith files (`…_create_tl_route_tables.php`,
  `…_999999_add_tl_foreign_keys.php`) stay full-set-only: the FK file references
  off-dial tables and would break a shipped subset; route tables span all
  namespaces. Shipped files remain self-consistent (their only FKs are inline
  `constrained()` to their own in-file anchors).

## Golden pins (against real v227 generated names)

- `migrations/` count 112 (< 200, > 80 sanity floor).
- Contains `2026_08_28_000632_create_tl_users_user_full_table.php` (satisfies
  the `create_tl_user*` requirement) + auth/messages/users prefixes present.
- Absent, prefix-anchored at the namespace position: `create_tl_payments_`,
  `create_tl_phone_`, `create_tl_stickers_` (real generated namespaces;
  plural "stickers" is the genuine name — singular `sticker` doesn't exist as a
  namespace). Note `messages_*stickers*` files DO ship — they're `messages.`
  namespace types, e.g. `tl_messages_faved_stickers`; the anchored prefixes
  avoid that false positive.
- Root `create_tl_user_table.php` / `create_tl_updates_table.php` and the
  route/FK files asserted absent.
- Shipped files sha256-identical to their `generated/` counterparts.
- End-to-end: `bin/regenerate --out=<tmp> --ship` reproduces the committed
  subset's file list exactly; full-set manifest sha256 unchanged
  (`f2462a3e…`, Task 3 pin still holds).

## Deviations / notes

- Plan line said "auth/messages/users/channels/updates/help namespaces"; the
  task brief added `contacts` to the default dial — followed the brief.
- `migrations/` (112 files) is committed as a generated-but-publishable
  artifact; regeneration via `--ship` reproduces it deterministically.

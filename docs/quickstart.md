# Quickstart — four working recipes

Copy-paste paths from zero to each headline capability. Every command and
signature here is verified against `src/`; deeper treatment lives in the
topic docs ([ingest](ingest.md), [bus](bus.md), [backup](backup.md)).

Common ground for all recipes: a Laravel host app, Postgres, Redis, and
this package installed (migrations auto-load — `php artisan migrate`
creates the `tl_*` truth tables). Sessions are credentials: keep them in
env/secrets, never in committed files.

## 1. First update → Postgres row

**When to use:** you have a Telegram account and want your first raw
update persisted as queryable `tl_*` rows.

```bash
# 1. Login once — teleproto's wizard prints a session string:
php artisan teleproto:login

# 2. Register the account (config/telegram-client.php):
# 'daemon' => ['accounts' => [
#     ['account_id' => 501558149, 'session_string' => env('TELEGRAM_SESSION_501558149')],
# ]],

# 3. Produce: run the daemon bootstrap (pattern in docs/bus.md — host
#    command wrapping Daemon + RedisStreamSink) with TELEPROTO_LIVE=true.

# 4. Consume one batch:
php artisan telegram-client:ingest --once
```

Query what landed — the aggregator resolves the CURRENT instance:

```php
$user = app(\MeRezaRezaei\TelegramClient\TelegramClient::class)
    ->user(501558149, 501558149);          // ?TlUser, tenant-scoped
$user?->currentInstance->first_name;       // fields live on the instance
```

## 2. Route updates with hot reload

**When to use:** some updates should feed your own consumer (a queue, a
notifier) instead of — or alongside — the Postgres truth.

```php
use MeRezaRezaei\TelegramClient\Bus\RouteTable;

// pattern -> target stream; prefix-only match on update['_'],
// first pattern in hash order wins, bare '*' catches everything.
$table = app(RouteTable::class);
$table->set('updateNewMessage*', 'tg:target:messages');
$table->set('*', 'tg:target:everything');
```

```bash
redis-cli publish tg:bus:reload 'reload'   # wake long-lived observers
php artisan telegram-client:ingest         # consumer forwards + acks
```

Matched entries are forwarded **verbatim** to the target stream and
acked (tenancy rides inside the entry); unmatched entries go to the
default ingest path, poison to `tg:stream:dead-letter`. The consumer
re-reads the table per entry, so routing is hot even without the
publish; `XREADGROUP tg:target:messages` on your side receives them.

## 3. Backfill a channel's history (quota-aware)

**When to use:** populate history for peers the poller never saw, without
starving live traffic.

```bash
php artisan telegram-client:backfill --account=501558149 --peer=@channel --budget=25
php artisan telegram-client:backfill --account=501558149 --peer=@a --peer=@b
```

Flags: `--account=<id>` (tenant the history lands under, required),
`--peer=<peer>` repeatable (`@username`, numeric id, `-100...`),
`--budget=25` per-run request budget — the headroom rule always reserves
50% for live traffic (budget 25 → ≤12 requests); FLOOD_WAIT sleeps
consume budget; 5 consecutive failures end the peer as `dead`.

What lands in DB: every fetched page is stored through the ingest
surface (always-instances path — history pages are one-shot fetches,
never route-deduped), so message history becomes `tl_*` instance rows
under the account's tenant. v1 is report-only: each peer prints
`{messages, requests, offset_id, status}`; re-runs resume manually from
the reported `offset_id` (persisted cursors land with Phase 4+).

## 4. Encrypted backup of a directory to a Telegram channel

**When to use:** offsite backups a cloud never decrypts — Argon2id +
XChaCha20-Poly1305, a private channel as dumb storage.

```php
// config/telegram-client.php — real backups need the telegram driver;
// driver 'memory' (default) is the offline smoke-test driver.
'backup' => [
    'driver' => 'telegram',
    'account' => env('TELEGRAM_CLIENT_BACKUP_ACCOUNT'), // daemon.accounts id
    'sets' => ['default' => [
        'paths' => [base_path('docs')],
        'excludes' => ['.git', 'node_modules'],
    ]],
],
```

```bash
php artisan telegram-client:backup run     --set=default --passphrase='...'
php artisan telegram-client:backup verify  --set=default --sample=5   # keyless sampling
php artisan telegram-client:backup verify  --set=default --passphrase='...'  # full decrypt
php artisan telegram-client:backup restore --set=default --passphrase='...' --target=/tmp/restore
```

The channel (`teleproto-backup:<setId>`) is provisioned automatically on
first run; `run` prints `{uploaded, skipped, files, bytes}` (identical
chunks upload once — content-addressed). Use a dedicated session (not
your poller account). Wrong passphrase fails loud at `restore`
(`Decryption failed`); lose it and chunks are unrecoverable by design.
Never change the passphrase of an existing set — rotate via a new set id
([backup.md](backup.md) explains the trap).

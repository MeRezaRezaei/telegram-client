<div align="center">

# telegram-client

**Telegram updates become database rows your app already knows how to query.**

[![tests](https://img.shields.io/badge/tests-301%20passing-brightgreen.svg?style=flat-square)](tests/)
[![PHP Version](https://img.shields.io/badge/PHP-%3E%3D%208.2-8892BF.svg?style=flat-square)](https://php.net/)
[![License](https://img.shields.io/badge/license-MIT-blue.svg?style=flat-square)](LICENSE)

</div>

---

A Laravel package that gives your application a full Telegram **client** — not just a wire. Updates land in a Postgres relational mirror (3,678 tables, tenant-scoped per account), a Redis bus with hot-reloadable routing fans them anywhere, a multi-account daemon keeps every account ticking, backfill pulls history within quota, and your own data backs up to Telegram channels encrypted.

It sits on top of [teleproto](https://github.com/MeRezaRezaei/teleproto), which owns the MTProto 2.0 wire:

```
your Laravel app ── Eloquent queries, events, artisan commands
       │
       ▼
telegram-client   ← this package: Postgres truth · Redis bus · daemon · backfill · backup
       │            raw TL arrays in, database rows out
       ▼
teleproto         ← the engine: MTProto 2.0 sessions, Bot API, login wizard
       │
       ▼
   Telegram
```

**teleproto gives wire power. telegram-client gives your app the client.**

---

## What you get

| Surface | What it does |
| :--- | :--- |
| **Ingest → Postgres truth** | Raw TL payloads become anchor/instance/child rows — idempotent, tenant-scoped |
| **3,116 spatie DTOs + 2,928 Eloquent models** | Generated from the official Layer 227 schema |
| **Redis bus** | One stream per installation, multi-account fan-in, prefix routes with hot reload |
| **Multi-account daemon** | Round-robin supervisor; FloodWait sleeps, DC migrations and failures are contained |
| **Backfill** | Quota-sliced history fetch per peer — half the budget always reserved for live traffic |
| **Encrypted backups** | Your files → Argon2id + XChaCha20-Poly1305 chunks → a private Telegram channel |

### 1. Ingest an update

```php
use MeRezaRezaei\TelegramClient\TelegramClient;

$client = app(TelegramClient::class);

// Any update payload from teleproto (snake keys, `_` constructor name):
$root = $client->ingest($update, $accountId);          // returns the root instance model

// Method responses are route-deduped — identical (method, params, account) hits the stored instance:
$instance = $client->ingestResponse('messages.getHistory', $params, $response, $accountId);
```

Re-ingesting an identical update is a byte-stable no-op. Every ingest requires an account id — there is no global mode, so cross-tenant reads are impossible by construction. After each committed write, `Ingest\Events\UpdateStored` fires carrying the root model and account id — your listeners take it from there.

### 2. Query what landed

```php
// Anchor with its CURRENT instance loaded as `currentInstance` — null if this
// tenant never saw the user, or the user is deleted:
$user = $client->user($accountId, 501558149);
$name = $user?->currentInstance?->first_name;

// The aggregator singleton also resolves chats and channels:
use MeRezaRezaei\TelegramClient\Ingest\EntityAggregator;

$entities = app(EntityAggregator::class);
$channel  = $entities->channel($accountId, 1049827413);
$chat     = $entities->chat($accountId, 7908664201);
```

Or skip the helpers entirely — every TL constructor is an Eloquent model in the `MeRezaRezaei\TelegramClient\Schema\Generated` namespace, and every vector child lands in its own table you can join.

### 3. Route updates over the bus

```bash
# Consume the stream into Postgres (loop; SIGTERM/SIGINT graceful):
php artisan telegram-client:ingest

# Route new messages somewhere else — prefix patterns, first match wins:
redis-cli hset tg:bus:routes 'updateNewMessage*' 'tg:target:messages'
redis-cli publish tg:bus:reload 'reload'
```

Matched entries are forwarded verbatim to the target stream; unmatched entries are ingested; poison entries go to a dead-letter stream and never wedge the group. The consumer re-reads the route table per entry, so routing is hot even without the reload ping.

### 4. Run every account with one daemon

```php
// config('telegram-client.daemon.accounts') — sessions are credentials; keep them in env:
'accounts' => [
    ['account_id' => 501558149, 'session_string' => env('TELEGRAM_SESSION_501558149')],
    ['account_id' => 600000001, 'session_string' => env('TELEGRAM_SESSION_600000001'), 'dc' => 4],
],
```

The `Daemon` class supervises `AccountWorker`s round-robin (30s slice each), so a wedged account can't starve the rest. FloodWait becomes interruptible sleep, DC migrations rebuild the scope and resume, and repeated failures isolate one account while the others keep ticking. A systemd unit template and the bootstrap wiring are in [docs/bus.md](docs/bus.md).

```ini
# /etc/systemd/system/telegram-client-daemon.service
[Service]
Type=simple
Environment=TELEPROTO_LIVE=true
ExecStart=/usr/bin/php /var/www/app/artisan telegram-client:daemon
Restart=on-failure
```

### 5. Backfill history within quota

```bash
php artisan telegram-client:backfill --account=501558149 --peer=@channel --budget=25
php artisan telegram-client:backfill --account=501558149 --peer=@a --peer=@b
```

The headroom rule always reserves 50% of the request budget for live traffic; FLOOD_WAIT sleeps capped at an hour consume budget rather than burning the account. Fetched pages land through the same ingest surface.

### 6. Back your data up to Telegram, encrypted

```bash
php artisan telegram-client:backup run      --set=default --passphrase='...'
php artisan telegram-client:backup verify   --set=default --sample=5
php artisan telegram-client:backup restore  --set=default --passphrase='...' --target=/tmp/restore
```

Files split into content-addressed 4 MiB chunks, sealed per-chunk with XChaCha20-Poly1305 (key derived from your passphrase via Argon2id13), deduplicated, and uploaded to a private channel the vault provisions itself. The manifest — posted last — alone describes the set: no server-side index, and Telegram only ever sees ciphertext. Details and the full security notes: [docs/backup.md](docs/backup.md).

---

## Install

```bash
composer require merezarezaei/telegram-client
```

teleproto (the wire engine) is pulled in automatically. Sessions come from teleproto's login wizard:

```bash
php artisan teleproto:login        # phone / QR / 2FA / bot — writes TELEGRAM_*_SESSION
```

Migrations ship with the package and load automatically; config merges as `telegram-client`. The offline surfaces (ingest, bus, backup `memory` driver) need no Telegram credentials at all — only the daemon and live backfill/backup want `TELEPROTO_LIVE=true` plus `TELEGRAM_API_ID` / `TELEGRAM_API_HASH`.

## Configuration tour

```php
// config/telegram-client.php
'daemon' => [          // the shared account registry: daemon, backfill and backup all read it
    'accounts' => [    // account_id + session_string (+ optional dc, api_id, api_hash)
        ['account_id' => 501558149, 'session_string' => env('TELEGRAM_SESSION_501558149')],
    ],
],

'bus' => [             // Redis bus: stream/group/reload names are fixed by StreamSchema
    'connection' => 'default',   // your illuminate/redis connection name
    'redis_client' => 'predis',  // or 'phpredis'
],

'backup' => [
    'driver' => env('TELEGRAM_CLIENT_BACKUP_DRIVER', 'memory'),  // memory|telegram
    'account' => env('TELEGRAM_CLIENT_BACKUP_ACCOUNT'),          // daemon.accounts id (telegram driver)
    'sets' => [
        'default' => [
            'paths' => [base_path('docs')],       // files/dirs, walked recursively
            'excludes' => ['.git', 'node_modules'],
        ],
    ],
],
```

---

## Tradeoffs — stated plainly

- **Sync daemon, not an event loop.** Round-robin time slices with graceful pcntl stop — simple to run and reason about, not a Fibers/async runtime. One account's FloodWait sleeps inside its own slice.
- **The migration dial ships 112 of 635 generated migrations.** Only curated namespaces (`auth`, `messages`, `users`, `channels`, `updates`, `help`, `contacts`) publish to `migrations/` — the full 3,678-table Layer 227 mirror always stays in `generated/`, and `php artisan telegram-client:regenerate --ship` re-cuts the dial from `telegram-client.ship_namespaces`.
- **Update handlers belong to your app.** This package emits `UpdateStored` events and routes stream entries; it deliberately ships no handler framework. The relational mirror is the contract.
- **Backfill v1 is report-only.** It prints per-peer cursors but does not persist them — re-run resumes manually from the reported `offset_id`.
- **Backup passphrase rotation = new set id.** Re-keying an existing set produces a mixed-key channel nothing can restore; rotate by running a fresh set. (Full warning in [docs/backup.md](docs/backup.md).)

## AI-friendly

 [`llms.txt`](llms.txt) indexes the package for agents, and the [`skills/`](skills/) directory carries a generated per-surface reference — the same docs your editor's agent reads.

## Documentation

- [Ingest — raw TL payloads into Postgres truth](docs/ingest.md)
- [Bus — Redis streams, routing, daemon & backfill](docs/bus.md)
- [Backup — encrypted Telegram-channel vault](docs/backup.md)
- Engine layer: [teleproto docs](https://github.com/MeRezaRezaei/teleproto)

## Testing

```bash
composer test      # 301 tests, no Telegram credentials required
```

## License

telegram-client is open-sourced software licensed under the [MIT license](LICENSE).

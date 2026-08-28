# Bus — Redis Streams, Ingest, Daemon & Backfill

The Phase 3 live pipeline: teleproto pollers → one Redis stream per
installation (multi-account fan-in) → `telegram-client:ingest` consumer
→ P2 Postgres truth, with hot-reloadable routing, a standalone
multi-account daemon and a quota-aware history backfill. illuminate/redis
on predis (pure PHP) or ext-phpredis — whatever the host app configures.

## Stream schema

All producers append to one stream (`StreamSchema::STREAM`):

| Const | Value | Meaning |
| --- | --- | --- |
| `STREAM` | `tg:stream:updates` | the updates fan-in stream |
| `GROUP` | `telegram-client` | consumer group (one logical consumer app) |
| `CONSUMER` | `ingest-1` | consumer name inside the group |
| `DL` | `tg:stream:dead-letter` | poison/dead-letter stream |
| `RELOAD_CHANNEL` | `tg:bus:reload` | route-reload pub/sub channel |
| `ROUTES_KEY` | `tg:bus:routes` | hash-backed route table |

Stream entry fields (canonical triple, byte-stable):

```
account_id  "7"                              tenancy (numeric user id / bot id part)
update      {"account_id":7,"update":{...},"ts":1690000000}   StreamSchema::encode JSON
ts          "1690000000"                     append time
```

`StreamSchema::encode/decode` is the only codec — stable key order
(`account_id`, `update`, `ts`), so forwarded/dead-lettered entries stay
byte-identical to what was appended. Producers use `RedisStreamSink`
(implements teleproto's `UpdateSinkInterface`); every account derives its
`account_id` from the poller source string automatically.

## Routes + reload protocol

`tg:bus:routes` is a Redis hash: pattern → target stream. Matching is
**prefix-only** (string functions, zero regex): a single trailing `*` is
stripped, then `str_starts_with(update['_'])`; the first pattern in hash
order wins; a bare `*` catches everything. No match → the default ingest
path.

```bash
redis-cli hset tg:bus:routes 'updateNewMessage*' 'tg:target:messages'
redis-cli publish tg:bus:reload 'reload'
```

- Matched entries are forwarded **verbatim** to the target stream and
  acked (tenancy metadata travels inside the entry).
- Unmatched entries are ingested (`TelegramClient::ingest`) under the
  entry's own `account_id` and acked; poison (undecodable) entries go to
  `tg:stream:dead-letter` and are acked — one bad entry never wedges the
  group.
- Reload: publish to `tg:bus:reload`; a `HotReloadRouter` (push style,
  for daemons) re-reads the table on each ping; the consumer reads the
  table fresh per entry, so routing is hot without any signal at all —
  the channel is the wake-up nudge for long-lived observers.

## Ingest command

```bash
php artisan telegram-client:ingest --once    # one batch, then exit
php artisan telegram-client:ingest           # loop (SIGTERM/SIGINT graceful)
php artisan telegram-client:ingest --max=500 # loop, stop after 500 batches
```

Idle batches back off 100ms. Exit 0 always; batch counts per line.

## Daemon (multi-account supervisor)

`Daemon` supervises `AccountWorker`s round-robin, one time slice
(`Daemon::TICK_SECONDS = 30`) per account per rotation, so a wedged
account cannot starve the rest:

- **FloodWait** → interruptible sleep (clamped by teleproto's
  `secondsToWait`, chunked so stop lands within a second), then resume
  from the adopted difference cursor;
- **DC migration** → rebuild the scope at the DC Telegram moved the
  session to, resume the same window;
- **unexpected** errors → retry; after 3 consecutive attempts with no
  observable progress the error escapes to the supervisor;
- supervisor reaction: isolate the account for 2s / 5s / 15s / 60s (cap)
  while the other accounts keep ticking; a healthy shift resets the
  failure count; when EVERY account has climbed the whole ladder the
  daemon exits 1 — the init system owns revival;
- SIGTERM / SIGINT (pcntl-guarded) → graceful stop → exit 0.

The daemon itself contains **no redis**: workers emit through the sink
they are handed, so bus wiring belongs to the bootstrap. The account
registry is `config('telegram-client.daemon.accounts')`:

```php
// config/telegram-client.php (publish and edit; sessions are CREDENTIALS —
// keep them in env/secrets, never in the committed file)
'daemon' => [
    'accounts' => [
        ['account_id' => 501558149, 'session_string' => env('TELEGRAM_SESSION_501558149')],
        ['account_id' => 600000001, 'session_string' => env('TELEGRAM_SESSION_600000001'), 'dc' => 4],
    ],
],
```

Bootstrap with bus wiring (host app — e.g. `app/Console/Commands/TelegramClientDaemonCommand.php`
or a plain script; this is the pattern, adapt the artisan shell to taste):

```php
use MeRezaRezaei\TelegramClient\Bus\LaravelRedisAdapter;
use MeRezaRezaei\TelegramClient\Bus\RedisStreamSink;
use MeRezaRezaei\TelegramClient\Daemon\AccountWorker;
use MeRezaRezaei\TelegramClient\Daemon\Daemon;
use MeRezaRezaei\TelegramClient\Daemon\WorkerInterface;
use MeRezaRezaei\Teleproto\Contracts\UpdateSinkInterface;

$accounts = config('telegram-client.daemon.accounts');
$redis    = app('redis')->connection(config('telegram-client.bus.connection'));

$daemon = new Daemon($accounts, function (array $account) use ($redis): WorkerInterface {
    $sink = new RedisStreamSink(new LaravelRedisAdapter($redis), (int) $account['account_id']);

    return new class ($account, $sink) implements WorkerInterface {
        public function __construct(
            private readonly array $account,
            private readonly UpdateSinkInterface $sink,
        ) {}

        public function run(?callable $shouldStop = null): void
        {
            (new AccountWorker($this->account))->run($this->sink, $shouldStop);
        }
    };
});

exit($daemon->run());
```

The live MTProto wire stays behind teleproto's tri-state flag — run the
daemon process with `TELEPROTO_LIVE=true` (and `TELEGRAM_API_ID` /
`TELEGRAM_API_HASH`, or per-account `api_id`/`api_hash` overrides).
`AccountWorker::lastSequenceState()` returns the account's difference
cursor (`{pts, date, qts, seq}`) after `run()` ends — persist it per
account and pass it back as the third constructor argument to resume
across daemon restarts.

### systemd unit

```ini
# /etc/systemd/system/telegram-client-daemon.service
[Unit]
Description=telegram-client multi-account daemon
After=network-online.target redis-server.service postgresql.service
Wants=network-online.target

[Service]
Type=simple
User=www-data
Group=www-data
WorkingDirectory=/var/www/app
Environment=TELEPROTO_LIVE=true
ExecStart=/usr/bin/php /var/www/app/artisan telegram-client:daemon   # host-provided command (bootstrap above)
Restart=on-failure          # the daemon's all-fail exit 1 lands here
RestartSec=5
TimeoutStopSec=30           # graceful SIGTERM window before the kill

[Install]
WantedBy=multi-user.target
```

## Backfill

```bash
php artisan telegram-client:backfill --account=501558149 --peer=@channel --budget=25
php artisan telegram-client:backfill --account=501558149 --peer=@a --peer=@b
```

Quota-sliced history fetch per peer (messages.getHistory offset_id cursor
loop, ported from the owner's fork): the headroom rule always reserves
50% of the per-run request budget for live traffic (`budget 25` → at
most 12 requests), FLOOD_WAIT sleeps `min(seconds, 3600)` consuming
budget, 5 consecutive failures inside a run end the peer as `dead`
(FetchQueue attempt accounting across runs dead-letters after 5).
Fetched pages are stored through the P2 ingest surface (`ingest`, not
route-deduped — history pages are one-shot fetches).

**v1 is report-only**: per-peer lines print `{messages, requests,
offset_id, status}` and the summary totals them; the offset cursor and
queue state are NOT persisted — re-run resumes manually from the
reported `offset_id` (`--peer` cursors as CLI options land with the
Phase 4 persistence story).

## Tenancy

Every stream entry carries `account_id`; the consumer ingests under it
(see docs/ingest.md for the tenancy model). One daemon, many accounts,
one truth.

<?php

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Bus;

use Closure;
use InvalidArgumentException;
use JsonException;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use MeRezaRezaei\TelegramClient\TelegramClient;

/**
 * The bus consumer (plan Task 2): reads one batch for the shared
 * consumer group from the updates stream and clears it:
 *
 *  - decode failure (poison payload) → re-posted verbatim to the
 *    dead-letter stream and acked — one bad entry never wedges the
 *    group;
 *  - RouteTable match → forwarded verbatim to the target stream and
 *    acked (counted as forwarded);
 *  - no route (the default path) → TelegramClient::ingest into P2
 *    truth under the entry's own account_id, with the optional
 *    onStored hook fired after the row commits.
 *
 * Every handled entry is acked before the batch ends, so a crash
 * mid-batch redelivers at most the un-acked tail.
 */
final class IngestConsumer
{
    private const BATCH = 10;

    /** @var ?Closure(TlInstanceModel, int): void */
    private readonly ?Closure $onStored;

    public function __construct(
        private readonly RedisConnectionContract $redis,
        private readonly TelegramClient $client,
        ?callable $onStored = null,
    ) {
        $this->onStored = $onStored === null ? null : $onStored(...);
    }

    /**
     * Consume at most one batch (BATCH new entries) and report counts.
     *
     * @return array{processed: int, forwarded: int} entries fully
     *         handled (ingested, forwarded or dead-lettered) and the
     *         subset rerouted to a target stream
     */
    public function consumeOnce(): array
    {
        $batch = $this->redis->xreadgroup(
            StreamSchema::GROUP,
            StreamSchema::CONSUMER,
            [StreamSchema::STREAM => self::BATCH],
        )[StreamSchema::STREAM] ?? [];

        $processed = 0;
        $forwarded = 0;

        foreach ($batch as $entryId => $fields) {
            try {
                $entry = StreamSchema::decode($fields['update'] ?? '');
            } catch (JsonException | InvalidArgumentException) {
                // Poison: preserve the payload verbatim for forensics,
                // then ack so the group keeps moving.
                $this->redis->xadd(StreamSchema::DL, '*', $fields);
                $this->redis->xack(StreamSchema::STREAM, StreamSchema::GROUP, [$entryId]);
                $processed++;

                continue;
            }

            $target = (new RouteTable($this->redis))->match($entry['update']);

            if ($target !== null) {
                $this->redis->xadd($target, '*', $fields);
                $forwarded++;
            } else {
                $root = $this->client->ingest($entry['update'], $entry['account_id']);

                if ($this->onStored !== null) {
                    ($this->onStored)($root, $entry['account_id']);
                }
            }

            $this->redis->xack(StreamSchema::STREAM, StreamSchema::GROUP, [$entryId]);
            $processed++;
        }

        return ['processed' => $processed, 'forwarded' => $forwarded];
    }
}

<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for messageReplies of MessageReplies.
 */
final class MessageRepliesData extends TlMessageRepliesAbstractData
{
    public function __construct(
    public int $flags,
    public bool $comments,
    public int $replies,
    public int $repliesPts,
    public ?array $recentRepliers,
    public int $channelId,
    public int $maxId,
    public int $readMaxId,
    ) {
    }
}

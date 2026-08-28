<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for postInteractionCountersMessage of PostInteractionCounters.
 */
final class PostInteractionCountersMessageData extends TlPostInteractionCountersAbstractData
{
    public function __construct(
    public int $msgId,
    public int $views,
    public int $forwards,
    public int $reactions,
    ) {
    }
}

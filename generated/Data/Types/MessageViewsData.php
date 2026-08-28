<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for messageViews of MessageViews.
 */
final class MessageViewsData extends TlMessageViewsAbstractData
{
    public function __construct(
    public int $flags,
    public int $views,
    public int $forwards,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlMessageRepliesAbstractData $replies,
    ) {
    }
}

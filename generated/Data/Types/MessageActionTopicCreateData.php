<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for messageActionTopicCreate of MessageAction.
 */
final class MessageActionTopicCreateData extends TlMessageActionAbstractData
{
    public function __construct(
    public int $flags,
    public bool $titleMissing,
    public string $title,
    public int $iconColor,
    public int $iconEmojiId,
    ) {
    }
}

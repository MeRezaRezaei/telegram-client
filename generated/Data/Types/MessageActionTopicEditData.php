<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for messageActionTopicEdit of MessageAction.
 */
final class MessageActionTopicEditData extends TlMessageActionAbstractData
{
    public function __construct(
    public int $flags,
    public string $title,
    public int $iconEmojiId,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlBoolAbstractData $closed,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlBoolAbstractData $hidden,
    ) {
    }
}

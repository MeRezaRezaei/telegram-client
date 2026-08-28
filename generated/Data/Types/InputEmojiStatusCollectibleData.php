<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for inputEmojiStatusCollectible of EmojiStatus.
 */
final class InputEmojiStatusCollectibleData extends TlEmojiStatusAbstractData
{
    public function __construct(
    public int $flags,
    public int $collectibleId,
    public ?int $until,
    ) {
    }
}

<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for inputSavedStarGiftChat of InputSavedStarGift.
 */
final class InputSavedStarGiftChatData extends TlInputSavedStarGiftAbstractData
{
    public function __construct(
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlInputPeerAbstractData $peer,
    public int $savedId,
    ) {
    }
}

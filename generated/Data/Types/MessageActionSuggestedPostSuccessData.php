<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for messageActionSuggestedPostSuccess of MessageAction.
 */
final class MessageActionSuggestedPostSuccessData extends TlMessageActionAbstractData
{
    public function __construct(
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlStarsAmountAbstractData $price,
    ) {
    }
}

<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for messages.availableEffects of messages.AvailableEffects.
 */
final class TlMessagesAvailableEffectsData extends TlMessagesAvailableEffectsAbstractData
{
    public function __construct(
    public int $hash,
    public array $effects,
    public array $documents,
    ) {
    }
}

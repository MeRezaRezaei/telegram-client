<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for inputAppEvent of InputAppEvent.
 */
final class InputAppEventData extends TlInputAppEventAbstractData
{
    public function __construct(
    public float $time,
    public string $type,
    public int $peer,
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlJSONValueAbstractData $data,
    ) {
    }
}

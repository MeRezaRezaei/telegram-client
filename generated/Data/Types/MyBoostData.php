<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for myBoost of MyBoost.
 */
final class MyBoostData extends TlMyBoostAbstractData
{
    public function __construct(
    public int $flags,
    public int $slot,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlPeerAbstractData $peer,
    public int $date,
    public int $expires,
    public ?int $cooldownUntilDate,
    ) {
    }
}

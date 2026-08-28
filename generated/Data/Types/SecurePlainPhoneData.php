<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for securePlainPhone of SecurePlainData.
 */
final class SecurePlainPhoneData extends TlSecurePlainDataAbstractData
{
    public function __construct(
    public string $phone,
    ) {
    }
}

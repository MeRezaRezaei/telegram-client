<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for inputPaymentCredentials of InputPaymentCredentials.
 */
final class InputPaymentCredentialsData extends TlInputPaymentCredentialsAbstractData
{
    public function __construct(
    public int $flags,
    public bool $save,
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlDataJSONAbstractData $data,
    ) {
    }
}

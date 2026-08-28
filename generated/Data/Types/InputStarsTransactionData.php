<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for inputStarsTransaction of InputStarsTransaction.
 */
final class InputStarsTransactionData extends TlInputStarsTransactionAbstractData
{
    public function __construct(
    public int $flags,
    public bool $refund,
    public string $id,
    ) {
    }
}

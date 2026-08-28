<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for payments.savedInfo of payments.SavedInfo.
 */
final class TlPaymentsSavedInfoData extends TlPaymentsSavedInfoAbstractData
{
    public function __construct(
    public int $flags,
    public bool $hasSavedCredentials,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlPaymentRequestedInfoAbstractData $savedInfo,
    ) {
    }
}

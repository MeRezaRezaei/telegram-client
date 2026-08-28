<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for payments.checkCanSendGiftResultFail of payments.CheckCanSendGiftResult.
 */
final class TlPaymentsCheckCanSendGiftResultFailData extends TlPaymentsCheckCanSendGiftResultAbstractData
{
    public function __construct(
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlTextWithEntitiesAbstractData $reason,
    ) {
    }
}

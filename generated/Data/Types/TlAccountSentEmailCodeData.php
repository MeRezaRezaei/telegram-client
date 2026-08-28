<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for account.sentEmailCode of account.SentEmailCode.
 */
final class TlAccountSentEmailCodeData extends TlAccountSentEmailCodeAbstractData
{
    public function __construct(
    public string $emailPattern,
    public int $length,
    ) {
    }
}

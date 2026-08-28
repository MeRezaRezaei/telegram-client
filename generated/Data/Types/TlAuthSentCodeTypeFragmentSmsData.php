<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for auth.sentCodeTypeFragmentSms of auth.SentCodeType.
 */
final class TlAuthSentCodeTypeFragmentSmsData extends TlAuthSentCodeTypeAbstractData
{
    public function __construct(
    public string $url,
    public int $length,
    ) {
    }
}

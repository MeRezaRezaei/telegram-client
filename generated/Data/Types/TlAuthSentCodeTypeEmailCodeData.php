<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for auth.sentCodeTypeEmailCode of auth.SentCodeType.
 */
final class TlAuthSentCodeTypeEmailCodeData extends TlAuthSentCodeTypeAbstractData
{
    public function __construct(
    public int $flags,
    public bool $appleSigninAllowed,
    public bool $googleSigninAllowed,
    public string $emailPattern,
    public int $length,
    public int $resetAvailablePeriod,
    public int $resetPendingDate,
    ) {
    }
}

<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for auth.sentCode of auth.SentCode.
 */
final class TlAuthSentCodeData extends TlAuthSentCodeAbstractData
{
    public function __construct(
    public int $flags,
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlAuthSentCodeTypeAbstractData $type,
    public string $phoneCodeHash,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlAuthCodeTypeAbstractData $nextType,
    public int $timeout,
    ) {
    }
}

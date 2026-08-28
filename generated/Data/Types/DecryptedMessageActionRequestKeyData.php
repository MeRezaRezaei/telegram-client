<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for decryptedMessageActionRequestKey of DecryptedMessageAction.
 *
 * bytes params carried as base64 strings: g_a
 */
final class DecryptedMessageActionRequestKeyData extends TlDecryptedMessageActionAbstractData
{
    public function __construct(
    public int $exchangeId,
    public string $gA,
    ) {
    }
}

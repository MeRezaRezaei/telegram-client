<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for decryptedMessageActionAcceptKey of DecryptedMessageAction.
 *
 * bytes params carried as base64 strings: g_b
 */
final class DecryptedMessageActionAcceptKeyData extends TlDecryptedMessageActionAbstractData
{
    public function __construct(
    public int $exchangeId,
    public string $gB,
    public int $keyFingerprint,
    ) {
    }
}

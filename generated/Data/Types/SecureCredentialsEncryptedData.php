<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for secureCredentialsEncrypted of SecureCredentialsEncrypted.
 *
 * bytes params carried as base64 strings: data, hash, secret
 */
final class SecureCredentialsEncryptedData extends TlSecureCredentialsEncryptedAbstractData
{
    public function __construct(
    public string $data,
    public string $hash,
    public string $secret,
    ) {
    }
}

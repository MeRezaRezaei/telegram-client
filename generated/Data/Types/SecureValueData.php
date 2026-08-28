<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for secureValue of SecureValue.
 *
 * bytes params carried as base64 strings: hash
 */
final class SecureValueData extends TlSecureValueAbstractData
{
    public function __construct(
    public int $flags,
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlSecureValueTypeAbstractData $type,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlSecureDataAbstractData $data,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlSecureFileAbstractData $frontSide,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlSecureFileAbstractData $reverseSide,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlSecureFileAbstractData $selfie,
    public ?array $translation,
    public ?array $files,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlSecurePlainDataAbstractData $plainData,
    public string $hash,
    ) {
    }
}

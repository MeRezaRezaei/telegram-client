<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for messageActionSecureValuesSentMe of MessageAction.
 */
final class MessageActionSecureValuesSentMeData extends TlMessageActionAbstractData
{
    public function __construct(
    public array $values,
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlSecureCredentialsEncryptedAbstractData $credentials,
    ) {
    }
}

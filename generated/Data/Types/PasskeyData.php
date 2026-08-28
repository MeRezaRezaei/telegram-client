<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for passkey of Passkey.
 */
final class PasskeyData extends TlPasskeyAbstractData
{
    public function __construct(
    public int $flags,
    public string $id,
    public string $name,
    public int $date,
    public ?int $softwareEmojiId,
    public ?int $lastUsageDate,
    ) {
    }
}

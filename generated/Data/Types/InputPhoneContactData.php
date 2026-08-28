<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for inputPhoneContact of InputContact.
 */
final class InputPhoneContactData extends TlInputContactAbstractData
{
    public function __construct(
    public int $flags,
    public int $clientId,
    public string $phone,
    public string $firstName,
    public string $lastName,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlTextWithEntitiesAbstractData $note,
    ) {
    }
}

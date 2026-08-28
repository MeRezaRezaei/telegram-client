<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for contactBirthday of ContactBirthday.
 */
final class ContactBirthdayData extends TlContactBirthdayAbstractData
{
    public function __construct(
    public int $contactId,
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlBirthdayAbstractData $birthday,
    ) {
    }
}

<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for contactStatus of ContactStatus.
 */
final class ContactStatusData extends TlContactStatusAbstractData
{
    public function __construct(
    public int $userId,
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlUserStatusAbstractData $status,
    ) {
    }
}

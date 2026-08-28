<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for help.support of help.Support.
 */
final class TlHelpSupportData extends TlHelpSupportAbstractData
{
    public function __construct(
    public string $phoneNumber,
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlUserAbstractData $user,
    ) {
    }
}

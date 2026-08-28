<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for account.passkeys of account.Passkeys.
 */
final class TlAccountPasskeysData extends TlAccountPasskeysAbstractData
{
    public function __construct(
    public array $passkeys,
    ) {
    }
}

<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for phone.phoneCall of phone.PhoneCall.
 */
final class TlPhonePhoneCallData extends TlPhonePhoneCallAbstractData
{
    public function __construct(
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlPhoneCallAbstractData $phoneCall,
    public array $users,
    ) {
    }
}

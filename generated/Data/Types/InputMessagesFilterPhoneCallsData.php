<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for inputMessagesFilterPhoneCalls of MessagesFilter.
 */
final class InputMessagesFilterPhoneCallsData extends TlMessagesFilterAbstractData
{
    public function __construct(
    public int $flags,
    public bool $missed,
    ) {
    }
}

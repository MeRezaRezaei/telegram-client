<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for phone.groupCallStreamChannels of phone.GroupCallStreamChannels.
 */
final class TlPhoneGroupCallStreamChannelsData extends TlPhoneGroupCallStreamChannelsAbstractData
{
    public function __construct(
    public array $channels,
    ) {
    }
}

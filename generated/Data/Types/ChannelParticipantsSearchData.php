<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for channelParticipantsSearch of ChannelParticipantsFilter.
 */
final class ChannelParticipantsSearchData extends TlChannelParticipantsFilterAbstractData
{
    public function __construct(
    public string $q,
    ) {
    }
}

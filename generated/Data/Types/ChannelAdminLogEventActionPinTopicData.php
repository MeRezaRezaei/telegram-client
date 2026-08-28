<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for channelAdminLogEventActionPinTopic of ChannelAdminLogEventAction.
 */
final class ChannelAdminLogEventActionPinTopicData extends TlChannelAdminLogEventActionAbstractData
{
    public function __construct(
    public int $flags,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlForumTopicAbstractData $prevTopic,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlForumTopicAbstractData $newTopic,
    ) {
    }
}

<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for channelAdminLogEventActionEditTopic of ChannelAdminLogEventAction.
 */
final class ChannelAdminLogEventActionEditTopicData extends TlChannelAdminLogEventActionAbstractData
{
    public function __construct(
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlForumTopicAbstractData $prevTopic,
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlForumTopicAbstractData $newTopic,
    ) {
    }
}

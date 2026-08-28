<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for channelAdminLogEventActionChangeAvailableReactions of ChannelAdminLogEventAction.
 */
final class ChannelAdminLogEventActionChangeAvailableReactionsData extends TlChannelAdminLogEventActionAbstractData
{
    public function __construct(
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlChatReactionsAbstractData $prevValue,
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlChatReactionsAbstractData $newValue,
    ) {
    }
}

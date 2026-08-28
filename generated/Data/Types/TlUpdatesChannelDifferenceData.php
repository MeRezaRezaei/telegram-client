<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for updates.channelDifference of updates.ChannelDifference.
 */
final class TlUpdatesChannelDifferenceData extends TlUpdatesChannelDifferenceAbstractData
{
    public function __construct(
    public int $flags,
    public bool $final,
    public int $pts,
    public int $timeout,
    public array $newMessages,
    public array $otherUpdates,
    public array $chats,
    public array $users,
    ) {
    }
}

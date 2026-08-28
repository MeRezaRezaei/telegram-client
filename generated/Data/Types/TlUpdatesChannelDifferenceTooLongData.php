<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for updates.channelDifferenceTooLong of updates.ChannelDifference.
 */
final class TlUpdatesChannelDifferenceTooLongData extends TlUpdatesChannelDifferenceAbstractData
{
    public function __construct(
    public int $flags,
    public bool $final,
    public int $timeout,
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlDialogAbstractData $dialog,
    public array $messages,
    public array $chats,
    public array $users,
    ) {
    }
}

<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for channelForbidden of Chat.
 */
final class ChannelForbiddenData extends TlChatAbstractData
{
    public function __construct(
    public int $flags,
    public bool $broadcast,
    public bool $megagroup,
    public bool $monoforum,
    public int $id,
    public int $accessHash,
    public string $title,
    public int $untilDate,
    ) {
    }
}

<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for updatePinnedChannelMessages of Update.
 */
final class UpdatePinnedChannelMessagesData extends TlUpdateAbstractData
{
    public function __construct(
    public int $flags,
    public bool $pinned,
    public int $channelId,
    public array $messages,
    public int $pts,
    public int $ptsCount,
    ) {
    }
}

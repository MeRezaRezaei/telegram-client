<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for channelAdminLogEventActionChangeEmojiStickerSet of ChannelAdminLogEventAction.
 */
final class ChannelAdminLogEventActionChangeEmojiStickerSetData extends TlChannelAdminLogEventActionAbstractData
{
    public function __construct(
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlInputStickerSetAbstractData $prevStickerset,
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlInputStickerSetAbstractData $newStickerset,
    ) {
    }
}

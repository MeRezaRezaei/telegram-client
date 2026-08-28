<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for stickerSet of StickerSet.
 */
final class StickerSetData extends TlStickerSetAbstractData
{
    public function __construct(
    public int $flags,
    public bool $archived,
    public bool $official,
    public bool $masks,
    public bool $emojis,
    public bool $textColor,
    public bool $channelEmojiStatus,
    public bool $creator,
    public int $installedDate,
    public int $id,
    public int $accessHash,
    public string $title,
    public string $shortName,
    public ?array $thumbs,
    public int $thumbDcId,
    public int $thumbVersion,
    public int $thumbDocumentId,
    public int $count,
    public int $hash,
    ) {
    }
}

<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for chatPhoto of ChatPhoto.
 *
 * bytes params carried as base64 strings: stripped_thumb
 */
final class ChatPhotoData extends TlChatPhotoAbstractData
{
    public function __construct(
    public int $flags,
    public bool $hasVideo,
    public int $photoId,
    public string $strippedThumb,
    public int $dcId,
    ) {
    }
}

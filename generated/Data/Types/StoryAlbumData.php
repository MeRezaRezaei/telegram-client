<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for storyAlbum of StoryAlbum.
 */
final class StoryAlbumData extends TlStoryAlbumAbstractData
{
    public function __construct(
    public int $flags,
    public int $albumId,
    public string $title,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlPhotoAbstractData $iconPhoto,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlDocumentAbstractData $iconVideo,
    ) {
    }
}

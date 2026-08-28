<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Methods;

use Spatie\LaravelData\Data;

/** Request DTO for RPC method stories.getAlbumStories (crc32 ac806d61), returns stories.Stories. */
final class TlStoriesGetAlbumStoriesData extends Data
{
    public const METHOD = 'stories.getAlbumStories';

    public static function method(): string
    {
        return self::METHOD;
    }

    public function __construct(
    public mixed $peer,
    public int $albumId,
    public int $offset,
    public int $limit,
    ) {
    }
}

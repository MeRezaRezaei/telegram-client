<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Methods;

use Spatie\LaravelData\Data;

/** Request DTO for RPC method stories.reorderAlbums (crc32 8535fbd9), returns Bool. */
final class TlStoriesReorderAlbumsData extends Data
{
    public const METHOD = 'stories.reorderAlbums';

    public static function method(): string
    {
        return self::METHOD;
    }

    public function __construct(
    public mixed $peer,
    public array $order,
    ) {
    }
}

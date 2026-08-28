<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Methods;

use Spatie\LaravelData\Data;

/** Request DTO for RPC method stories.deleteStories (crc32 ae59db5f), returns Vector<int>. */
final class TlStoriesDeleteStoriesData extends Data
{
    public const METHOD = 'stories.deleteStories';

    public static function method(): string
    {
        return self::METHOD;
    }

    public function __construct(
    public mixed $peer,
    public array $id,
    ) {
    }
}

<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Methods;

use Spatie\LaravelData\Data;

/** Request DTO for RPC method stories.togglePinned (crc32 9a75a1ef), returns Vector<int>. */
final class TlStoriesTogglePinnedData extends Data
{
    public const METHOD = 'stories.togglePinned';

    public static function method(): string
    {
        return self::METHOD;
    }

    public function __construct(
    public mixed $peer,
    public array $id,
    public mixed $pinned,
    ) {
    }
}

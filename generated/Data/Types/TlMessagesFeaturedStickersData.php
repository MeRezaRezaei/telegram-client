<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for messages.featuredStickers of messages.FeaturedStickers.
 */
final class TlMessagesFeaturedStickersData extends TlMessagesFeaturedStickersAbstractData
{
    public function __construct(
    public int $flags,
    public bool $premium,
    public int $hash,
    public int $count,
    public array $sets,
    public array $unread,
    ) {
    }
}

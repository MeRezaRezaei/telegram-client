<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for searchPostsFlood of SearchPostsFlood.
 */
final class SearchPostsFloodData extends TlSearchPostsFloodAbstractData
{
    public function __construct(
    public int $flags,
    public bool $queryIsFree,
    public int $totalDaily,
    public int $remains,
    public int $waitTill,
    public int $starsAmount,
    ) {
    }
}

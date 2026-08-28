<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for pageBlockOrderedList of PageBlock.
 */
final class PageBlockOrderedListData extends TlPageBlockAbstractData
{
    public function __construct(
    public int $flags,
    public bool $reversed,
    public array $items,
    public int $start,
    public string $type,
    ) {
    }
}

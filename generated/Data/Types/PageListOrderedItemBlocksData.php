<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for pageListOrderedItemBlocks of PageListOrderedItem.
 */
final class PageListOrderedItemBlocksData extends TlPageListOrderedItemAbstractData
{
    public function __construct(
    public int $flags,
    public bool $checkbox,
    public bool $checked,
    public string $num,
    public array $blocks,
    public int $value,
    public string $type,
    ) {
    }
}

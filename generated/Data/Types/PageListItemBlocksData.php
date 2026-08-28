<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for pageListItemBlocks of PageListItem.
 */
final class PageListItemBlocksData extends TlPageListItemAbstractData
{
    public function __construct(
    public int $flags,
    public bool $checkbox,
    public bool $checked,
    public array $blocks,
    ) {
    }
}

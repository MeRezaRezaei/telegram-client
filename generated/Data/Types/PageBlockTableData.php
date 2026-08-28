<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for pageBlockTable of PageBlock.
 */
final class PageBlockTableData extends TlPageBlockAbstractData
{
    public function __construct(
    public int $flags,
    public bool $bordered,
    public bool $striped,
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlRichTextAbstractData $title,
    public array $rows,
    ) {
    }
}

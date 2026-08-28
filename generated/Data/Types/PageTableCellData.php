<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for pageTableCell of PageTableCell.
 */
final class PageTableCellData extends TlPageTableCellAbstractData
{
    public function __construct(
    public int $flags,
    public bool $header,
    public bool $alignCenter,
    public bool $alignRight,
    public bool $valignMiddle,
    public bool $valignBottom,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlRichTextAbstractData $text,
    public int $colspan,
    public int $rowspan,
    ) {
    }
}

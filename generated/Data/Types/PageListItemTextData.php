<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for pageListItemText of PageListItem.
 */
final class PageListItemTextData extends TlPageListItemAbstractData
{
    public function __construct(
    public int $flags,
    public bool $checkbox,
    public bool $checked,
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlRichTextAbstractData $text,
    ) {
    }
}

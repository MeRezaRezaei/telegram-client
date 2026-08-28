<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for pageBlockBlockquoteBlocks of PageBlock.
 */
final class PageBlockBlockquoteBlocksData extends TlPageBlockAbstractData
{
    public function __construct(
    public array $blocks,
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlRichTextAbstractData $caption,
    ) {
    }
}

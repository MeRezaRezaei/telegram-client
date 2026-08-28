<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for richMessage of RichMessage.
 */
final class RichMessageData extends TlRichMessageAbstractData
{
    public function __construct(
    public int $flags,
    public bool $rtl,
    public bool $part,
    public array $blocks,
    public array $photos,
    public array $documents,
    ) {
    }
}

<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for textCustomEmoji of RichText.
 */
final class TextCustomEmojiData extends TlRichTextAbstractData
{
    public function __construct(
    public int $documentId,
    public string $alt,
    ) {
    }
}

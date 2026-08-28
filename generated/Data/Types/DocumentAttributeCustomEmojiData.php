<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for documentAttributeCustomEmoji of DocumentAttribute.
 */
final class DocumentAttributeCustomEmojiData extends TlDocumentAttributeAbstractData
{
    public function __construct(
    public int $flags,
    public bool $free,
    public bool $textColor,
    public string $alt,
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlInputStickerSetAbstractData $stickerset,
    ) {
    }
}

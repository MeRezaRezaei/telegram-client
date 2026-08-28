<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for documentAttributeFilename of DocumentAttribute.
 */
final class DocumentAttributeFilenameData extends TlDocumentAttributeAbstractData
{
    public function __construct(
    public string $fileName,
    ) {
    }
}

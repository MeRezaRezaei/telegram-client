<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for inputWebFileAudioAlbumThumbLocation of InputWebFileLocation.
 */
final class InputWebFileAudioAlbumThumbLocationData extends TlInputWebFileLocationAbstractData
{
    public function __construct(
    public int $flags,
    public bool $small,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlInputDocumentAbstractData $document,
    public string $title,
    public string $performer,
    ) {
    }
}

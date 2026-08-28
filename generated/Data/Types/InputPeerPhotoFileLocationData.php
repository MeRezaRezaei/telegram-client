<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for inputPeerPhotoFileLocation of InputFileLocation.
 */
final class InputPeerPhotoFileLocationData extends TlInputFileLocationAbstractData
{
    public function __construct(
    public int $flags,
    public bool $big,
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlInputPeerAbstractData $peer,
    public int $photoId,
    ) {
    }
}

<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for fileLocation of FileLocation.
 */
final class FileLocationData extends TlFileLocationAbstractData
{
    public function __construct(
    public int $dcId,
    public int $volumeId,
    public int $localId,
    public int $secret,
    ) {
    }
}

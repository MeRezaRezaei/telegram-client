<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for game of Game.
 */
final class GameData extends TlGameAbstractData
{
    public function __construct(
    public int $flags,
    public int $id,
    public int $accessHash,
    public string $shortName,
    public string $title,
    public string $description,
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlPhotoAbstractData $photo,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlDocumentAbstractData $document,
    ) {
    }
}

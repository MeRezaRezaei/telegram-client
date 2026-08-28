<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for photo of Photo.
 *
 * bytes params carried as base64 strings: file_reference
 */
final class PhotoData extends TlPhotoAbstractData
{
    public function __construct(
    public int $flags,
    public bool $hasStickers,
    public int $id,
    public int $accessHash,
    public string $fileReference,
    public int $date,
    public array $sizes,
    public ?array $videoSizes,
    public int $dcId,
    ) {
    }
}

<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for maskCoords of MaskCoords.
 */
final class MaskCoordsData extends TlMaskCoordsAbstractData
{
    public function __construct(
    public int $n,
    public float $x,
    public float $y,
    public float $zoom,
    ) {
    }
}

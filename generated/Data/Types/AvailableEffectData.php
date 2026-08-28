<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for availableEffect of AvailableEffect.
 */
final class AvailableEffectData extends TlAvailableEffectAbstractData
{
    public function __construct(
    public int $flags,
    public bool $premiumRequired,
    public int $id,
    public string $emoticon,
    public int $staticIconId,
    public int $effectStickerId,
    public int $effectAnimationId,
    ) {
    }
}

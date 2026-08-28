<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for updatePhoneCallSignalingData of Update.
 *
 * bytes params carried as base64 strings: data
 */
final class UpdatePhoneCallSignalingDataData extends TlUpdateAbstractData
{
    public function __construct(
    public int $phoneCallId,
    public string $data,
    ) {
    }
}

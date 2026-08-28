<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for phoneCallDiscarded of PhoneCall.
 */
final class PhoneCallDiscardedData extends TlPhoneCallAbstractData
{
    public function __construct(
    public int $flags,
    public bool $needRating,
    public bool $needDebug,
    public bool $video,
    public int $id,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlPhoneCallDiscardReasonAbstractData $reason,
    public int $duration,
    ) {
    }
}

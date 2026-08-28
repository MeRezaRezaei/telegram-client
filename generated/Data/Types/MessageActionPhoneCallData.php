<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for messageActionPhoneCall of MessageAction.
 */
final class MessageActionPhoneCallData extends TlMessageActionAbstractData
{
    public function __construct(
    public int $flags,
    public bool $video,
    public int $callId,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlPhoneCallDiscardReasonAbstractData $reason,
    public int $duration,
    ) {
    }
}

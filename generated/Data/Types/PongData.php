<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for pong of Pong.
 */
final class PongData extends TlPongAbstractData
{
    public function __construct(
    public int $msgId,
    public int $pingId,
    ) {
    }
}

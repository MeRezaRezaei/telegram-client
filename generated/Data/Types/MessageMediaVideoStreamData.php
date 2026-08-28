<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for messageMediaVideoStream of MessageMedia.
 */
final class MessageMediaVideoStreamData extends TlMessageMediaAbstractData
{
    public function __construct(
    public int $flags,
    public bool $rtmpStream,
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlInputGroupCallAbstractData $call,
    ) {
    }
}

<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for updateGroupCall of Update.
 */
final class UpdateGroupCallData extends TlUpdateAbstractData
{
    public function __construct(
    public int $flags,
    public bool $liveStory,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlPeerAbstractData $peer,
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlGroupCallAbstractData $call,
    ) {
    }
}

<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for messageActionRequestedPeer of MessageAction.
 */
final class MessageActionRequestedPeerData extends TlMessageActionAbstractData
{
    public function __construct(
    public int $buttonId,
    public array $peers,
    ) {
    }
}

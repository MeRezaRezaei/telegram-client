<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for messageReactor of MessageReactor.
 */
final class MessageReactorData extends TlMessageReactorAbstractData
{
    public function __construct(
    public int $flags,
    public bool $top,
    public bool $my,
    public bool $anonymous,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlPeerAbstractData $peerId,
    public int $count,
    ) {
    }
}

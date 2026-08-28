<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for requestPeerTypeUser of RequestPeerType.
 */
final class RequestPeerTypeUserData extends TlRequestPeerTypeAbstractData
{
    public function __construct(
    public int $flags,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlBoolAbstractData $bot,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlBoolAbstractData $premium,
    ) {
    }
}

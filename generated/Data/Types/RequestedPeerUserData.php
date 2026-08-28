<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for requestedPeerUser of RequestedPeer.
 */
final class RequestedPeerUserData extends TlRequestedPeerAbstractData
{
    public function __construct(
    public int $flags,
    public int $userId,
    public string $firstName,
    public string $lastName,
    public string $username,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlPhotoAbstractData $photo,
    ) {
    }
}

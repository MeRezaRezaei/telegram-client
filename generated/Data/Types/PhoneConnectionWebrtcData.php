<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for phoneConnectionWebrtc of PhoneConnection.
 */
final class PhoneConnectionWebrtcData extends TlPhoneConnectionAbstractData
{
    public function __construct(
    public int $flags,
    public bool $turn,
    public bool $stun,
    public int $id,
    public string $ip,
    public string $ipv6,
    public int $port,
    public string $username,
    public string $password,
    ) {
    }
}

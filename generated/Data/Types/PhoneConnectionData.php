<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for phoneConnection of PhoneConnection.
 *
 * bytes params carried as base64 strings: peer_tag
 */
final class PhoneConnectionData extends TlPhoneConnectionAbstractData
{
    public function __construct(
    public int $flags,
    public bool $tcp,
    public int $id,
    public string $ip,
    public string $ipv6,
    public int $port,
    public string $peerTag,
    ) {
    }
}

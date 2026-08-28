<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for phoneCallProtocol of PhoneCallProtocol.
 */
final class PhoneCallProtocolData extends TlPhoneCallProtocolAbstractData
{
    public function __construct(
    public int $flags,
    public bool $udpP2p,
    public bool $udpReflector,
    public int $minLayer,
    public int $maxLayer,
    public array $libraryVersions,
    ) {
    }
}

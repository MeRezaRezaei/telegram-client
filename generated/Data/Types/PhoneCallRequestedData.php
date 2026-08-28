<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for phoneCallRequested of PhoneCall.
 *
 * bytes params carried as base64 strings: g_a_hash
 */
final class PhoneCallRequestedData extends TlPhoneCallAbstractData
{
    public function __construct(
    public int $flags,
    public bool $video,
    public int $id,
    public int $accessHash,
    public int $date,
    public int $adminId,
    public int $participantId,
    public string $gAHash,
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlPhoneCallProtocolAbstractData $protocol,
    ) {
    }
}

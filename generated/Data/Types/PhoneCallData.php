<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for phoneCall of PhoneCall.
 *
 * bytes params carried as base64 strings: g_a_or_b
 */
final class PhoneCallData extends TlPhoneCallAbstractData
{
    public function __construct(
    public int $flags,
    public bool $p2pAllowed,
    public bool $video,
    public bool $conferenceSupported,
    public int $id,
    public int $accessHash,
    public int $date,
    public int $adminId,
    public int $participantId,
    public string $gAOrB,
    public int $keyFingerprint,
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlPhoneCallProtocolAbstractData $protocol,
    public array $connections,
    public int $startDate,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlDataJSONAbstractData $customParameters,
    ) {
    }
}

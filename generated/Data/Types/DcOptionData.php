<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for dcOption of DcOption.
 *
 * bytes params carried as base64 strings: secret
 */
final class DcOptionData extends TlDcOptionAbstractData
{
    public function __construct(
    public int $flags,
    public bool $ipv6,
    public bool $mediaOnly,
    public bool $tcpoOnly,
    public bool $cdn,
    public bool $static,
    public bool $thisPortOnly,
    public int $id,
    public string $ipAddress,
    public int $port,
    public string $secret,
    ) {
    }
}

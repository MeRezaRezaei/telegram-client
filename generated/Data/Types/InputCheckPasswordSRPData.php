<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for inputCheckPasswordSRP of InputCheckPasswordSRP.
 *
 * bytes params carried as base64 strings: A, M1
 */
final class InputCheckPasswordSRPData extends TlInputCheckPasswordSRPAbstractData
{
    public function __construct(
    public int $srpId,
    public string $a,
    public string $m1,
    ) {
    }
}

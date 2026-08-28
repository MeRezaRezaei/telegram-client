<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for updateNewAuthorization of Update.
 */
final class UpdateNewAuthorizationData extends TlUpdateAbstractData
{
    public function __construct(
    public int $flags,
    public bool $unconfirmed,
    public int $hash,
    public int $date,
    public string $device,
    public string $location,
    ) {
    }
}

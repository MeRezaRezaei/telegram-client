<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for auth.authorization of auth.Authorization.
 *
 * bytes params carried as base64 strings: future_auth_token
 */
final class TlAuthAuthorizationData extends TlAuthAuthorizationAbstractData
{
    public function __construct(
    public int $flags,
    public bool $setupPasswordRequired,
    public int $otherwiseReloginDays,
    public int $tmpSessions,
    public string $futureAuthToken,
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlUserAbstractData $user,
    ) {
    }
}

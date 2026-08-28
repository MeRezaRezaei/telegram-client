<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for authorization of Authorization.
 */
final class AuthorizationData extends TlAuthorizationAbstractData
{
    public function __construct(
    public int $flags,
    public bool $current,
    public bool $officialApp,
    public bool $passwordPending,
    public bool $encryptedRequestsDisabled,
    public bool $callRequestsDisabled,
    public bool $unconfirmed,
    public int $hash,
    public string $deviceModel,
    public string $platform,
    public string $systemVersion,
    public int $apiId,
    public string $appName,
    public string $appVersion,
    public int $dateCreated,
    public int $dateActive,
    public string $ip,
    public string $country,
    public string $region,
    ) {
    }
}

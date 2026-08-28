<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for urlAuthResultRequest of UrlAuthResult.
 */
final class UrlAuthResultRequestData extends TlUrlAuthResultAbstractData
{
    public function __construct(
    public int $flags,
    public bool $requestWriteAccess,
    public bool $requestPhoneNumber,
    public bool $matchCodesFirst,
    public bool $isApp,
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlUserAbstractData $bot,
    public string $domain,
    public string $browser,
    public string $platform,
    public string $ip,
    public string $region,
    public ?array $matchCodes,
    public int $userIdHint,
    public string $verifiedAppName,
    ) {
    }
}

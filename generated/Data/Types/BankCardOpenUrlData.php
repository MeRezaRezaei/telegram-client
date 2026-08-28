<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for bankCardOpenUrl of BankCardOpenUrl.
 */
final class BankCardOpenUrlData extends TlBankCardOpenUrlAbstractData
{
    public function __construct(
    public string $url,
    public string $name,
    ) {
    }
}

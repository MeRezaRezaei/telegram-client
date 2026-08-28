<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for account.webBrowserSettings of account.WebBrowserSettings.
 */
final class TlAccountWebBrowserSettingsData extends TlAccountWebBrowserSettingsAbstractData
{
    public function __construct(
    public int $flags,
    public bool $openExternalBrowser,
    public bool $displayCloseButton,
    public array $externalExceptions,
    public array $inappExceptions,
    public int $hash,
    ) {
    }
}

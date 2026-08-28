<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for webPageAttributeTheme of WebPageAttribute.
 */
final class WebPageAttributeThemeData extends TlWebPageAttributeAbstractData
{
    public function __construct(
    public int $flags,
    public ?array $documents,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlThemeSettingsAbstractData $settings,
    ) {
    }
}

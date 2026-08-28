<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for langPackLanguage of LangPackLanguage.
 */
final class LangPackLanguageData extends TlLangPackLanguageAbstractData
{
    public function __construct(
    public int $flags,
    public bool $official,
    public bool $rtl,
    public bool $beta,
    public string $name,
    public string $nativeName,
    public string $langCode,
    public string $baseLangCode,
    public string $pluralCode,
    public int $stringsCount,
    public int $translatedCount,
    public string $translationsUrl,
    ) {
    }
}

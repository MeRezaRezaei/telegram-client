<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlLangPackLanguageLangPackLanguage (langPackLanguage). */
final class TlLangPackLanguageLangPackLanguageFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlLangPackLanguageLangPackLanguage> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlLangPackLanguageLangPackLanguage::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'flags' => 1,
            'official' => true,
            'rtl' => true,
            'beta' => true,
            'name' => 'name-5',
            'native_name' => 'native_name-6',
            'lang_code' => 'lang_code-7',
            'base_lang_code' => 'base_lang_code-8',
            'plural_code' => 'plural_code-9',
            'strings_count' => 10,
            'translated_count' => 11,
            'translations_url' => 'translations_url-12',
        ];
    }
}

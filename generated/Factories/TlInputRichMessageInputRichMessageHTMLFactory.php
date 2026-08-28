<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlInputRichMessageInputRichMessageHTML (inputRichMessageHTML). */
final class TlInputRichMessageInputRichMessageHTMLFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlInputRichMessageInputRichMessageHTML> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlInputRichMessageInputRichMessageHTML::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'flags' => 1,
            'rtl' => true,
            'noautolink' => true,
            'html' => 'html-4',
        ];
    }
}

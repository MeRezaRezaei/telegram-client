<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlInputRichMessageInputRichMessage (inputRichMessage). */
final class TlInputRichMessageInputRichMessageFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlInputRichMessageInputRichMessage> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlInputRichMessageInputRichMessage::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'flags' => 1,
            'rtl' => true,
            'noautolink' => true,
        ];
    }
}

<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlPageListItemPageListItemText (pageListItemText). */
final class TlPageListItemPageListItemTextFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlPageListItemPageListItemText> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlPageListItemPageListItemText::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'flags' => 1,
            'checkbox' => true,
            'checked' => true,
            'text' => (string) new \Symfony\Component\Uid\UuidV7(),
        ];
    }
}

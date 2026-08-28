<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlPageCaptionPageCaption (pageCaption). */
final class TlPageCaptionPageCaptionFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlPageCaptionPageCaption> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlPageCaptionPageCaption::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'text' => (string) new \Symfony\Component\Uid\UuidV7(),
            'credit' => (string) new \Symfony\Component\Uid\UuidV7(),
        ];
    }
}

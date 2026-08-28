<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlPageBlockPageBlockRelatedArticles (pageBlockRelatedArticles). */
final class TlPageBlockPageBlockRelatedArticlesFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlPageBlockPageBlockRelatedArticles> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlPageBlockPageBlockRelatedArticles::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'title' => (string) new \Symfony\Component\Uid\UuidV7(),
        ];
    }
}

<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlInputBusinessIntroInputBusinessIntro (inputBusinessIntro). */
final class TlInputBusinessIntroInputBusinessIntroFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlInputBusinessIntroInputBusinessIntro> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlInputBusinessIntroInputBusinessIntro::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'flags' => 1,
            'title' => 'title-2',
            'description' => 'description-3',
            'sticker' => (string) new \Symfony\Component\Uid\UuidV7(),
        ];
    }
}

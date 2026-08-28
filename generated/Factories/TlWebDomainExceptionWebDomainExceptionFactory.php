<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlWebDomainExceptionWebDomainException (webDomainException). */
final class TlWebDomainExceptionWebDomainExceptionFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlWebDomainExceptionWebDomainException> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlWebDomainExceptionWebDomainException::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'flags' => 1,
            'domain' => 'domain-2',
            'url' => 'url-3',
            'title' => 'title-4',
            'favicon' => 1005,
        ];
    }
}

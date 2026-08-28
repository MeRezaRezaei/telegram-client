<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlInputClientProxyInputClientProxy (inputClientProxy). */
final class TlInputClientProxyInputClientProxyFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlInputClientProxyInputClientProxy> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlInputClientProxyInputClientProxy::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'address' => 'address-1',
            'port' => 2,
        ];
    }
}

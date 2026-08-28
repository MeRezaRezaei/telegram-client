<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlServerDHParamsServerDHParamsFail (server_DH_params_fail). */
final class TlServerDHParamsServerDHParamsFailFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlServerDHParamsServerDHParamsFail> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlServerDHParamsServerDHParamsFail::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'nonce' => '99999999999999999999999999999999999999',
            'server_nonce' => '99999999999999999999999999999999999999',
            'new_nonce_hash' => '99999999999999999999999999999999999999',
        ];
    }
}

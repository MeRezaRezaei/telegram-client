<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlServerDHParamsServerDHParamsOk (server_DH_params_ok). */
final class TlServerDHParamsServerDHParamsOkFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlServerDHParamsServerDHParamsOk> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlServerDHParamsServerDHParamsOk::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'nonce' => '99999999999999999999999999999999999999',
            'server_nonce' => '99999999999999999999999999999999999999',
            'encrypted_answer' => 'encrypted_answer-3',
        ];
    }
}

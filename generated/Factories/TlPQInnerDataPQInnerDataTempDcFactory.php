<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlPQInnerDataPQInnerDataTempDc (p_q_inner_data_temp_dc). */
final class TlPQInnerDataPQInnerDataTempDcFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlPQInnerDataPQInnerDataTempDc> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlPQInnerDataPQInnerDataTempDc::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'pq' => 'pq-1',
            'p' => 'p-2',
            'q' => 'q-3',
            'nonce' => '99999999999999999999999999999999999999',
            'server_nonce' => '99999999999999999999999999999999999999',
            'new_nonce' => '99999999999999999999999999999999999999999999999999999999999999999999999999999',
            'dc' => 7,
            'expires_in' => 8,
        ];
    }
}

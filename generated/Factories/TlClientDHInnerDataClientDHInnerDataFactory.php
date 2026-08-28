<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlClientDHInnerDataClientDHInnerData (client_DH_inner_data). */
final class TlClientDHInnerDataClientDHInnerDataFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlClientDHInnerDataClientDHInnerData> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlClientDHInnerDataClientDHInnerData::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'nonce' => '99999999999999999999999999999999999999',
            'server_nonce' => '99999999999999999999999999999999999999',
            'retry_id' => 1003,
            'g_b' => 'g_b-4',
        ];
    }
}

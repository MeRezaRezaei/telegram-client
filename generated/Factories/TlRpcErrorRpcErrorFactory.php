<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlRpcErrorRpcError (rpc_error). */
final class TlRpcErrorRpcErrorFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlRpcErrorRpcError> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlRpcErrorRpcError::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'error_code' => 1,
            'error_message' => 'error_message-2',
        ];
    }
}

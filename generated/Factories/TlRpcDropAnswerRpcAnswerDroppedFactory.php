<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlRpcDropAnswerRpcAnswerDropped (rpc_answer_dropped). */
final class TlRpcDropAnswerRpcAnswerDroppedFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlRpcDropAnswerRpcAnswerDropped> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlRpcDropAnswerRpcAnswerDropped::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'msg_id' => 1001,
            'seq_no' => 2,
            'bytes' => 3,
        ];
    }
}

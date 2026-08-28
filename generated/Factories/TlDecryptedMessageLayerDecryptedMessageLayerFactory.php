<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlDecryptedMessageLayerDecryptedMessageLayer (decryptedMessageLayer). */
final class TlDecryptedMessageLayerDecryptedMessageLayerFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlDecryptedMessageLayerDecryptedMessageLayer> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlDecryptedMessageLayerDecryptedMessageLayer::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'random_bytes' => 'Ynl0ZXMtMQ==',
            'layer' => 2,
            'in_seq_no' => 3,
            'out_seq_no' => 4,
            'message' => (string) new \Symfony\Component\Uid\UuidV7(),
        ];
    }
}

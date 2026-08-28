<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlUpdateUpdateGroupCallChainBlocks (updateGroupCallChainBlocks). */
final class TlUpdateUpdateGroupCallChainBlocksFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlUpdateUpdateGroupCallChainBlocks> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlUpdateUpdateGroupCallChainBlocks::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'call' => (string) new \Symfony\Component\Uid\UuidV7(),
            'sub_chain_id' => 2,
            'next_offset' => 3,
        ];
    }
}

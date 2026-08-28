<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlPageListOrderedItemPageListOrderedItemBlocks (pageListOrderedItemBlocks). */
final class TlPageListOrderedItemPageListOrderedItemBlocksFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlPageListOrderedItemPageListOrderedItemBlocks> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlPageListOrderedItemPageListOrderedItemBlocks::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'flags' => 1,
            'checkbox' => true,
            'checked' => true,
            'num' => 'num-4',
            'tl_value' => 5,
            'tl_type' => 'type-6',
        ];
    }
}

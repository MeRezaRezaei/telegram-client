<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlPageListItemPageListItemBlocks (pageListItemBlocks). */
final class TlPageListItemPageListItemBlocksFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlPageListItemPageListItemBlocks> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlPageListItemPageListItemBlocks::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'flags' => 1,
            'checkbox' => true,
            'checked' => true,
        ];
    }
}

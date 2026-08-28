<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlHelpPeerColorOptionPeerColorOption (help.peerColorOption). */
final class TlHelpPeerColorOptionPeerColorOptionFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlHelpPeerColorOptionPeerColorOption> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlHelpPeerColorOptionPeerColorOption::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'flags' => 1,
            'hidden' => true,
            'color_id' => 3,
            'colors' => (string) new \Symfony\Component\Uid\UuidV7(),
            'dark_colors' => (string) new \Symfony\Component\Uid\UuidV7(),
            'channel_min_level' => 6,
            'group_min_level' => 7,
        ];
    }
}

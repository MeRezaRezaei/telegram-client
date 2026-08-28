<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlHelpAppUpdateAppUpdate (help.appUpdate). */
final class TlHelpAppUpdateAppUpdateFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlHelpAppUpdateAppUpdate> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlHelpAppUpdateAppUpdate::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'flags' => 1,
            'can_not_skip' => true,
            'tl_id' => 3,
            'version' => 'version-4',
            'text' => 'text-5',
            'document' => (string) new \Symfony\Component\Uid\UuidV7(),
            'url' => 'url-7',
            'sticker' => (string) new \Symfony\Component\Uid\UuidV7(),
        ];
    }
}

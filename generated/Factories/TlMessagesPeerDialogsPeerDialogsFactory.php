<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlMessagesPeerDialogsPeerDialogs (messages.peerDialogs). */
final class TlMessagesPeerDialogsPeerDialogsFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlMessagesPeerDialogsPeerDialogs> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlMessagesPeerDialogsPeerDialogs::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'state' => (string) new \Symfony\Component\Uid\UuidV7(),
        ];
    }
}

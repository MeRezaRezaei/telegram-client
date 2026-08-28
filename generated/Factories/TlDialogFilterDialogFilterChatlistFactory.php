<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlDialogFilterDialogFilterChatlist (dialogFilterChatlist). */
final class TlDialogFilterDialogFilterChatlistFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlDialogFilterDialogFilterChatlist> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlDialogFilterDialogFilterChatlist::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'flags' => 1,
            'has_my_invites' => true,
            'title_noanimate' => true,
            'tl_id' => 4,
            'title' => (string) new \Symfony\Component\Uid\UuidV7(),
            'emoticon' => 'emoticon-6',
            'color' => 7,
        ];
    }
}

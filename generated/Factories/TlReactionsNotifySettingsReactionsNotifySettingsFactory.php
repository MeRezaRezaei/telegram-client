<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlReactionsNotifySettingsReactionsNotifySettings (reactionsNotifySettings). */
final class TlReactionsNotifySettingsReactionsNotifySettingsFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlReactionsNotifySettingsReactionsNotifySettings> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlReactionsNotifySettingsReactionsNotifySettings::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'flags' => 1,
            'messages_notify_from' => (string) new \Symfony\Component\Uid\UuidV7(),
            'stories_notify_from' => (string) new \Symfony\Component\Uid\UuidV7(),
            'poll_votes_notify_from' => (string) new \Symfony\Component\Uid\UuidV7(),
            'sound' => (string) new \Symfony\Component\Uid\UuidV7(),
            'show_previews' => (string) new \Symfony\Component\Uid\UuidV7(),
        ];
    }
}

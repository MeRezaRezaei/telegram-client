<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlMessageActionMessageActionTopicEdit (messageActionTopicEdit). */
final class TlMessageActionMessageActionTopicEditFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlMessageActionMessageActionTopicEdit> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlMessageActionMessageActionTopicEdit::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'flags' => 1,
            'title' => 'title-2',
            'icon_emoji_id' => 1003,
            'closed' => (string) new \Symfony\Component\Uid\UuidV7(),
            'hidden' => (string) new \Symfony\Component\Uid\UuidV7(),
        ];
    }
}

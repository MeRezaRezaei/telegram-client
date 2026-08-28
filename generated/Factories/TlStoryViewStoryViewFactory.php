<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlStoryViewStoryView (storyView). */
final class TlStoryViewStoryViewFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlStoryViewStoryView> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlStoryViewStoryView::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'flags' => 1,
            'blocked' => true,
            'blocked_my_stories_from' => true,
            'user_id' => 1004,
            'date' => 5,
            'reaction' => (string) new \Symfony\Component\Uid\UuidV7(),
        ];
    }
}

<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlKeyboardButtonKeyboardButtonSimpleWebView (keyboardButtonSimpleWebView). */
final class TlKeyboardButtonKeyboardButtonSimpleWebViewFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlKeyboardButtonKeyboardButtonSimpleWebView> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlKeyboardButtonKeyboardButtonSimpleWebView::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'flags' => 1,
            'style' => (string) new \Symfony\Component\Uid\UuidV7(),
            'text' => 'text-3',
            'url' => 'url-4',
        ];
    }
}

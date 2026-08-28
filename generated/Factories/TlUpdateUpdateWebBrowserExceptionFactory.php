<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlUpdateUpdateWebBrowserException (updateWebBrowserException). */
final class TlUpdateUpdateWebBrowserExceptionFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlUpdateUpdateWebBrowserException> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlUpdateUpdateWebBrowserException::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'flags' => 1,
            'delete' => true,
            'open_external_browser' => (string) new \Symfony\Component\Uid\UuidV7(),
            'exception' => (string) new \Symfony\Component\Uid\UuidV7(),
        ];
    }
}

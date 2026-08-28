<?php

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Tests\Schema;

use MeRezaRezaei\TelegramClient\TelegramClientServiceProvider;
use PHPUnit\Framework\TestCase;

final class ScaffoldTest extends TestCase
{
    public function testProviderLoads(): void
    {
        self::assertInstanceOf(\Illuminate\Support\ServiceProvider::class, new TelegramClientServiceProvider(null));
    }
}

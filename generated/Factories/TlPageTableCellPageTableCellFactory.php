<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlPageTableCellPageTableCell (pageTableCell). */
final class TlPageTableCellPageTableCellFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlPageTableCellPageTableCell> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlPageTableCellPageTableCell::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'flags' => 1,
            'header' => true,
            'align_center' => true,
            'align_right' => true,
            'valign_middle' => true,
            'valign_bottom' => true,
            'text' => (string) new \Symfony\Component\Uid\UuidV7(),
            'colspan' => 8,
            'rowspan' => 9,
        ];
    }
}

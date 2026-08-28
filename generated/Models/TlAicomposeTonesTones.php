<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;
use MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlAicomposeTonesTonesTones;
use MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlAicomposeTonesTonesUsers;

/** Constructor model for aicompose.tones of aicompose.Tones (crc32 6c9d0efe). */
final class TlAicomposeTonesTones extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_aicompose_tones_tones';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'hash' => 'int',
    ];

    public function tones(): HasMany
    {
        return $this->tlChild(TlAicomposeTonesTonesTones::class);
    }
    public function users(): HasMany
    {
        return $this->tlChild(TlAicomposeTonesTonesUsers::class);
    }
}

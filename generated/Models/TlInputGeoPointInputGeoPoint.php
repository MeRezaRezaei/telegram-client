<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;

/** Constructor model for inputGeoPoint of InputGeoPoint (crc32 48222faf). */
final class TlInputGeoPointInputGeoPoint extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_input_geo_point_input_geo_point';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'flags' => 'int',
        'lat' => 'float',
        'tl_long' => 'float',
        'accuracy_radius' => 'int',
    ];
}

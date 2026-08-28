<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;

/** Constructor model for searchPostsFlood of SearchPostsFlood (crc32 3e0b5b6a). */
final class TlSearchPostsFloodSearchPostsFlood extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_search_posts_flood_search_posts_flood';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'flags' => 'int',
        'query_is_free' => 'bool',
        'total_daily' => 'int',
        'remains' => 'int',
        'wait_till' => 'int',
        'stars_amount' => 'int',
    ];
}

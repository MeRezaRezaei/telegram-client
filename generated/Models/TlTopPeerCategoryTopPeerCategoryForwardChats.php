<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;

/** Constructor model for topPeerCategoryForwardChats of TopPeerCategory (crc32 fbeec0f0). */
final class TlTopPeerCategoryTopPeerCategoryForwardChats extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_top_peer_category_top_peer_category_forward_chats';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
    ];
}

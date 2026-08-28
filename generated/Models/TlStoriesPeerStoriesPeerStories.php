<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;
use MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlStoriesPeerStoriesPeerStoriesChats;
use MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlStoriesPeerStoriesPeerStoriesUsers;

/** Constructor model for stories.peerStories of stories.PeerStories (crc32 cae68768). */
final class TlStoriesPeerStoriesPeerStories extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_stories_peer_stories_peer_stories';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'stories' => 'string',
    ];

    public function chats(): HasMany
    {
        return $this->tlChild(TlStoriesPeerStoriesPeerStoriesChats::class);
    }
    public function users(): HasMany
    {
        return $this->tlChild(TlStoriesPeerStoriesPeerStoriesUsers::class);
    }
}

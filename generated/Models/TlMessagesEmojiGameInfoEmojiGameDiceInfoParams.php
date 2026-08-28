<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlAnchorModel;

/** Vector child rows for param params (table tl_messages_emoji_game_info_emoji_game_dice_info__params). */
final class TlMessagesEmojiGameInfoEmojiGameDiceInfoParams extends TlAnchorModel
{
    protected $table = 'tl_messages_emoji_game_info_emoji_game_dice_info__params';

    public $timestamps = false; // child tables carry no timestamps columns

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'value' => 'int',
    ];
}

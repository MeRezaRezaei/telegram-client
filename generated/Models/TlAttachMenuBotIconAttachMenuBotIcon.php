<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;
use MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlAttachMenuBotIconAttachMenuBotIconColors;

/** Constructor model for attachMenuBotIcon of AttachMenuBotIcon (crc32 b2a7386b). */
final class TlAttachMenuBotIconAttachMenuBotIcon extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_attach_menu_bot_icon_attach_menu_bot_icon';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'flags' => 'int',
        'name' => 'string',
        'icon' => 'string',
    ];

    public function colors(): HasMany
    {
        return $this->tlChild(TlAttachMenuBotIconAttachMenuBotIconColors::class);
    }
}

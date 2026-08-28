<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;

/** Constructor model for sendMessageUploadVideoAction of SendMessageAction (crc32 e9763aec). */
final class TlSendMessageActionSendMessageUploadVideoAction extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_send_message_action_send_message_upload_video_action';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'progress' => 'int',
    ];
}

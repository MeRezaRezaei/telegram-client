<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;

/** Constructor model for userProfilePhoto of UserProfilePhoto (crc32 82d1f706). */
final class TlUserProfilePhotoUserProfilePhoto extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_user_profile_photo_user_profile_photo';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'flags' => 'int',
        'has_video' => 'bool',
        'personal' => 'bool',
        'photo_id' => 'int',
        'stripped_thumb' => 'string',
        'dc_id' => 'int',
    ];
}

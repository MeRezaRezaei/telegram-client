<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;
use MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlSecureValueSecureValueTranslation;
use MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlSecureValueSecureValueFiles;

/** Constructor model for secureValue of SecureValue (crc32 187fa0ca). */
final class TlSecureValueSecureValue extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_secure_value_secure_value';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'flags' => 'int',
        'tl_type' => 'string',
        'data' => 'string',
        'front_side' => 'string',
        'reverse_side' => 'string',
        'selfie' => 'string',
        'plain_data' => 'string',
        'hash' => 'string',
    ];

    public function translation(): HasMany
    {
        return $this->tlChild(TlSecureValueSecureValueTranslation::class);
    }
    public function files(): HasMany
    {
        return $this->tlChild(TlSecureValueSecureValueFiles::class);
    }
}

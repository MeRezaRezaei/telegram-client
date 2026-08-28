<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;
use MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlAccountAuthorizationsAuthorizationsAuthorizations;

/** Constructor model for account.authorizations of account.Authorizations (crc32 4bff8ea0). */
final class TlAccountAuthorizationsAuthorizations extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_account_authorizations_authorizations';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'authorization_ttl_days' => 'int',
    ];

    public function authorizations(): HasMany
    {
        return $this->tlChild(TlAccountAuthorizationsAuthorizationsAuthorizations::class);
    }
}

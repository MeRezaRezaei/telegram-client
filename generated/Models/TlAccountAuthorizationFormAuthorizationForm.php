<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;
use MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlAccountAuthorizationFormAuthorizationFormRequired_types;
use MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlAccountAuthorizationFormAuthorizationFormValues;
use MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlAccountAuthorizationFormAuthorizationFormErrors;
use MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlAccountAuthorizationFormAuthorizationFormUsers;

/** Constructor model for account.authorizationForm of account.AuthorizationForm (crc32 ad2e1cd8). */
final class TlAccountAuthorizationFormAuthorizationForm extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_account_authorization_form_authorization_form';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'flags' => 'int',
        'privacy_policy_url' => 'string',
    ];

    public function requiredTypes(): HasMany
    {
        return $this->tlChild(TlAccountAuthorizationFormAuthorizationFormRequired_types::class);
    }
    public function values(): HasMany
    {
        return $this->tlChild(TlAccountAuthorizationFormAuthorizationFormValues::class);
    }
    public function errors(): HasMany
    {
        return $this->tlChild(TlAccountAuthorizationFormAuthorizationFormErrors::class);
    }
    public function users(): HasMany
    {
        return $this->tlChild(TlAccountAuthorizationFormAuthorizationFormUsers::class);
    }
}

<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for account.password of account.Password.
 *
 * bytes params carried as base64 strings: srp_B, secure_random
 */
final class TlAccountPasswordData extends TlAccountPasswordAbstractData
{
    public function __construct(
    public int $flags,
    public bool $hasRecovery,
    public bool $hasSecureValues,
    public bool $hasPassword,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlPasswordKdfAlgoAbstractData $currentAlgo,
    public string $srpB,
    public int $srpId,
    public string $hint,
    public string $emailUnconfirmedPattern,
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlPasswordKdfAlgoAbstractData $newAlgo,
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlSecurePasswordKdfAlgoAbstractData $newSecureAlgo,
    public string $secureRandom,
    public int $pendingResetDate,
    public string $loginEmailPattern,
    ) {
    }
}

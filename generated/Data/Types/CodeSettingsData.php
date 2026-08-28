<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for codeSettings of CodeSettings.
 */
final class CodeSettingsData extends TlCodeSettingsAbstractData
{
    public function __construct(
    public int $flags,
    public bool $allowFlashcall,
    public bool $currentNumber,
    public bool $allowAppHash,
    public bool $allowMissedCall,
    public bool $allowFirebase,
    public bool $unknownNumber,
    public ?array $logoutTokens,
    public string $token,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlBoolAbstractData $appSandbox,
    ) {
    }
}

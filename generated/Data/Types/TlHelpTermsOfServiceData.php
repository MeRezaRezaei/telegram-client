<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for help.termsOfService of help.TermsOfService.
 */
final class TlHelpTermsOfServiceData extends TlHelpTermsOfServiceAbstractData
{
    public function __construct(
    public int $flags,
    public bool $popup,
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlDataJSONAbstractData $id,
    public string $text,
    public array $entities,
    public int $minAgeConfirm,
    ) {
    }
}

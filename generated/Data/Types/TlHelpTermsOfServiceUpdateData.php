<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for help.termsOfServiceUpdate of help.TermsOfServiceUpdate.
 */
final class TlHelpTermsOfServiceUpdateData extends TlHelpTermsOfServiceUpdateAbstractData
{
    public function __construct(
    public int $expires,
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlHelpTermsOfServiceAbstractData $termsOfService,
    ) {
    }
}

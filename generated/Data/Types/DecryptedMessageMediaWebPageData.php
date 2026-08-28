<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for decryptedMessageMediaWebPage of DecryptedMessageMedia.
 */
final class DecryptedMessageMediaWebPageData extends TlDecryptedMessageMediaAbstractData
{
    public function __construct(
    public string $url,
    ) {
    }
}

<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for messages.stickerSetInstallResultArchive of messages.StickerSetInstallResult.
 */
final class TlMessagesStickerSetInstallResultArchiveData extends TlMessagesStickerSetInstallResultAbstractData
{
    public function __construct(
    public array $sets,
    ) {
    }
}

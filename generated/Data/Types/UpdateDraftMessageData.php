<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for updateDraftMessage of Update.
 */
final class UpdateDraftMessageData extends TlUpdateAbstractData
{
    public function __construct(
    public int $flags,
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlPeerAbstractData $peer,
    public ?int $topMsgId,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlPeerAbstractData $savedPeerId,
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlDraftMessageAbstractData $draft,
    ) {
    }
}

<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for groupCallMessage of GroupCallMessage.
 */
final class GroupCallMessageData extends TlGroupCallMessageAbstractData
{
    public function __construct(
    public int $flags,
    public bool $fromAdmin,
    public int $id,
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlPeerAbstractData $fromId,
    public int $date,
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlTextWithEntitiesAbstractData $message,
    public int $paidMessageStars,
    ) {
    }
}

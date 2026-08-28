<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for updateShortMessage of Updates.
 */
final class UpdateShortMessageData extends TlUpdatesAbstractData
{
    public function __construct(
    public int $flags,
    public bool $out,
    public bool $mentioned,
    public bool $mediaUnread,
    public bool $silent,
    public int $id,
    public int $userId,
    public string $message,
    public int $pts,
    public int $ptsCount,
    public int $date,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlMessageFwdHeaderAbstractData $fwdFrom,
    public int $viaBotId,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlMessageReplyHeaderAbstractData $replyTo,
    public ?array $entities,
    public int $ttlPeriod,
    ) {
    }
}

<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for updateMonoForumNoPaidException of Update.
 */
final class UpdateMonoForumNoPaidExceptionData extends TlUpdateAbstractData
{
    public function __construct(
    public int $flags,
    public bool $exception,
    public int $channelId,
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlPeerAbstractData $savedPeerId,
    ) {
    }
}

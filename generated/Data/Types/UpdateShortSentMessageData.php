<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for updateShortSentMessage of Updates.
 */
final class UpdateShortSentMessageData extends TlUpdatesAbstractData
{
    public function __construct(
    public int $flags,
    public bool $out,
    public int $id,
    public int $pts,
    public int $ptsCount,
    public int $date,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlMessageMediaAbstractData $media,
    public ?array $entities,
    public int $ttlPeriod,
    ) {
    }
}

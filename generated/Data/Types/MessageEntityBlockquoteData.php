<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for messageEntityBlockquote of MessageEntity.
 */
final class MessageEntityBlockquoteData extends TlMessageEntityAbstractData
{
    public function __construct(
    public int $flags,
    public bool $collapsed,
    public int $offset,
    public int $length,
    ) {
    }
}

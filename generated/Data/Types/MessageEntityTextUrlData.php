<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for messageEntityTextUrl of MessageEntity.
 */
final class MessageEntityTextUrlData extends TlMessageEntityAbstractData
{
    public function __construct(
    public int $offset,
    public int $length,
    public string $url,
    ) {
    }
}

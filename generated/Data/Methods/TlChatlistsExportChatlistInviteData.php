<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Methods;

use Spatie\LaravelData\Data;

/** Request DTO for RPC method chatlists.exportChatlistInvite (crc32 8472478e), returns chatlists.ExportedChatlistInvite. */
final class TlChatlistsExportChatlistInviteData extends Data
{
    public const METHOD = 'chatlists.exportChatlistInvite';

    public static function method(): string
    {
        return self::METHOD;
    }

    public function __construct(
    public mixed $chatlist,
    public string $title,
    public array $peers,
    ) {
    }
}

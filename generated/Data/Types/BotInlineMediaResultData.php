<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for botInlineMediaResult of BotInlineResult.
 */
final class BotInlineMediaResultData extends TlBotInlineResultAbstractData
{
    public function __construct(
    public int $flags,
    public string $id,
    public string $type,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlPhotoAbstractData $photo,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlDocumentAbstractData $document,
    public ?string $title,
    public ?string $description,
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlBotInlineMessageAbstractData $sendMessage,
    ) {
    }
}

<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for inputBotInlineResult of InputBotInlineResult.
 */
final class InputBotInlineResultData extends TlInputBotInlineResultAbstractData
{
    public function __construct(
    public int $flags,
    public string $id,
    public string $type,
    public ?string $title,
    public ?string $description,
    public ?string $url,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlInputWebDocumentAbstractData $thumb,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlInputWebDocumentAbstractData $content,
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlInputBotInlineMessageAbstractData $sendMessage,
    ) {
    }
}

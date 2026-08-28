<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for aiComposeTone of AiComposeTone.
 */
final class AiComposeToneData extends TlAiComposeToneAbstractData
{
    public function __construct(
    public int $flags,
    public bool $creator,
    public int $id,
    public int $accessHash,
    public string $slug,
    public string $title,
    public int $emojiId,
    public string $prompt,
    public int $installsCount,
    public int $authorId,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlAiComposeToneExampleAbstractData $exampleEnglish,
    ) {
    }
}

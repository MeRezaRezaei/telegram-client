<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for messages.botResults of messages.BotResults.
 */
final class TlMessagesBotResultsData extends TlMessagesBotResultsAbstractData
{
    public function __construct(
    public int $flags,
    public bool $gallery,
    public int $queryId,
    public string $nextOffset,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlInlineBotSwitchPMAbstractData $switchPm,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlInlineBotWebViewAbstractData $switchWebview,
    public array $results,
    public int $cacheTime,
    public array $users,
    ) {
    }
}

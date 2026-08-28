<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for updateJoinChatWebViewDecision of Update.
 */
final class UpdateJoinChatWebViewDecisionData extends TlUpdateAbstractData
{
    public function __construct(
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlPeerAbstractData $peer,
    public int $queryId,
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlJoinChatBotResultAbstractData $result,
    ) {
    }
}

<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for messageReactions of MessageReactions.
 */
final class MessageReactionsData extends TlMessageReactionsAbstractData
{
    public function __construct(
    public int $flags,
    public bool $min,
    public bool $canSeeList,
    public bool $reactionsAsTags,
    public array $results,
    public ?array $recentReactions,
    public ?array $topReactors,
    ) {
    }
}

<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for pollResults of PollResults.
 */
final class PollResultsData extends TlPollResultsAbstractData
{
    public function __construct(
    public int $flags,
    public bool $min,
    public bool $hasUnreadVotes,
    public bool $canViewStats,
    public ?array $results,
    public int $totalVoters,
    public ?array $recentVoters,
    public string $solution,
    public ?array $solutionEntities,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlMessageMediaAbstractData $solutionMedia,
    ) {
    }
}

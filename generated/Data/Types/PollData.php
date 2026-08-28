<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for poll of Poll.
 */
final class PollData extends TlPollAbstractData
{
    public function __construct(
    public int $id,
    public int $flags,
    public bool $closed,
    public bool $publicVoters,
    public bool $multipleChoice,
    public bool $quiz,
    public bool $openAnswers,
    public bool $revotingDisabled,
    public bool $shuffleAnswers,
    public bool $hideResultsUntilClose,
    public bool $creator,
    public bool $subscribersOnly,
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlTextWithEntitiesAbstractData $question,
    public array $answers,
    public int $closePeriod,
    public int $closeDate,
    public ?array $countriesIso2,
    public int $hash,
    ) {
    }
}

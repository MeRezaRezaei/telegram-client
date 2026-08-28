<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/**
 * Union DTO base for TL type RequirementToContact.
 *
 * @method static static fromWire(array $payload)
 */
abstract class TlRequirementToContactAbstractData extends Data
{
    /** @var array<string, class-string<self>> */
    protected const DISPATCH = [
        'requirementToContactEmpty' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\RequirementToContactEmptyData::class,
        'requirementToContactPaidMessages' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\RequirementToContactPaidMessagesData::class,
        'requirementToContactPremium' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\RequirementToContactPremiumData::class,
    ];

    /** Dispatch on the constructor name carried under the '_' key of a decoded wire payload. */
    public static function fromWire(array $payload): static
    {
        $class = static::DISPATCH[$payload['_']]
            ?? throw new \InvalidArgumentException('Unknown constructor ' . $payload['_'] . ' for RequirementToContact');
        /** @var static */
        return $class::from($payload);
    }
}

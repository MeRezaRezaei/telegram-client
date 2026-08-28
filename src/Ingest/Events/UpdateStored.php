<?php

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Ingest\Events;

use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;

/**
 * Fired after an ingested update's root transaction commits (roadmap
 * contract: events OUT carry Eloquent models; the app layer consumes).
 */
final class UpdateStored
{
    use Dispatchable;
    use SerializesModels;

    public function __construct(
        public readonly TlInstanceModel $model,
        public readonly int $accountId,
    ) {
    }
}

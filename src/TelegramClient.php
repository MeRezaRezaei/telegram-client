<?php

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient;

use MeRezaRezaei\TelegramClient\Ingest\EntityAggregator;
use MeRezaRezaei\TelegramClient\Ingest\UpdateIngestor;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlUser;

/**
 * The package's public face (plan Task 5): a thin, container-resolvable
 * wrapper over the ingest surfaces — updates (always become instances),
 * method responses (route-deduped), and entity aggregation lookups.
 *
 * Resolve it from the container (bound as a singleton by the service
 * provider); see docs/ingest.md for the tenancy model, route semantics,
 * events and idempotency guarantees.
 */
final class TelegramClient
{
    public function __construct(
        private readonly UpdateIngestor $ingestor,
        private readonly EntityAggregator $entities,
    ) {
    }

    /**
     * Ingest a raw update payload (teleproto truth: snake keys, `_`
     * constructor name). Updates always become instances — they never
     * touch routes.
     *
     * @param array<string, mixed> $update
     */
    public function ingest(array $update, int $accountId): TlInstanceModel
    {
        return $this->ingestor->ingest($update, $accountId);
    }

    /**
     * Ingest a raw method response, route-deduped: a (method, params,
     * account) combination that already answered resolves to the stored
     * instance instead of rewriting; update-kind payloads bypass routes
     * and always become instances.
     *
     * @param array<string, mixed> $params
     * @param array<string, mixed> $response
     */
    public function ingestResponse(string $method, array $params, array $response, int $accountId): ?TlInstanceModel
    {
        return $this->ingestor->ingestResponse($method, $params, $response, $accountId);
    }

    /**
     * The anchor for a referenced user under a tenant, with its CURRENT
     * instance loaded as `currentInstance` — null when the tenant never
     * saw the user or its current instance is deleted.
     */
    public function user(int $accountId, int $tgId): ?TlUser
    {
        return $this->entities->user($accountId, $tgId);
    }
}

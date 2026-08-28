<?php

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Backup;

use RuntimeException;

/**
 * In-memory VaultInterface fake (ships as a tool per plan Phase 4): an
 * associative chunk store — latest write wins per hash — plus an append
 * stack of manifests whose top is the latest. Message ids are synthetic
 * incrementing strings, mirroring what a channel-backed vault returns.
 */
final class InMemoryVault implements VaultInterface
{
    /** @var array<string, string> hash → ciphertext bytes */
    private array $chunks = [];

    /** @var list<string> manifest JSON strings, oldest first */
    private array $manifests = [];

    private int $nextMsgId = 1;

    public function putChunk(string $hash, string $bytes): string
    {
        $this->chunks[$hash] = $bytes;

        return (string) $this->nextMsgId++;
    }

    public function getChunk(string $hash): string
    {
        if (!array_key_exists($hash, $this->chunks)) {
            throw new RuntimeException("chunk {$hash} not stored in this vault");
        }

        return $this->chunks[$hash];
    }

    public function putManifest(string $json): string
    {
        $this->manifests[] = $json;

        return (string) $this->nextMsgId++;
    }

    public function getLatestManifest(): ?array
    {
        $json = $this->manifests === [] ? null : $this->manifests[count($this->manifests) - 1];
        if ($json === null) {
            return null;
        }

        $decoded = json_decode($json, true);
        if (!is_array($decoded)) {
            throw new RuntimeException('latest manifest is not valid JSON');
        }

        return $decoded;
    }
}

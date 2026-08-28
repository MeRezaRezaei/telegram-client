<?php

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Backup;

/**
 * Content-addressed chunk + manifest storage behind a backup set
 * (plan Phase 4): BackupRunner uploads encrypted chunks keyed by their
 * hash and finishes with a manifest; Restorer reads the LATEST manifest
 * back and fetches the chunks it references. Message ids are opaque
 * strings to keep the interface transport-agnostic.
 */
interface VaultInterface
{
    /**
     * Store encrypted chunk bytes under their ciphertext hash.
     *
     * @return string message id of the stored chunk document
     */
    public function putChunk(string $hash, string $bytes): string;

    /**
     * Fetch chunk bytes previously stored under $hash.
     *
     * @throws \RuntimeException when the chunk is not in the vault
     */
    public function getChunk(string $hash): string;

    /**
     * Post a manifest JSON document; manifests form an ordered stack.
     *
     * @return string message id of the manifest message
     */
    public function putManifest(string $json): string;

    /**
     * Decoded most-recent manifest.
     *
     * @return array<string, mixed>|null null when no manifest was posted yet
     */
    public function getLatestManifest(): ?array;
}

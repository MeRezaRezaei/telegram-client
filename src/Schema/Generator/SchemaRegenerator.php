<?php

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generator;

use MeRezaRezaei\TelegramClient\Schema\Generator\Model\TlConstructor;
use MeRezaRezaei\TelegramClient\Schema\Generator\Model\TlScheme;

/**
 * Regeneration engine (spec §7): parses every tracked scheme file, merges
 * them into one combined scheme (later files win ctor-name collisions), runs
 * all four generators, and writes the deterministic manifest gate.
 */
final class SchemaRegenerator
{
    private bool $force = false;

    public function force(bool $force = true): self
    {
        $this->force = $force;
        return $this;
    }

    /** @return array{counts: array{types:int,constructors:int,methods:int,files:int,tables:int,fks:int}, manifest: array} */
    public function regenerate(string $schemasDir, string $outputDir): array
    {
        if (!is_dir($schemasDir)) {
            throw new TlRegenerateException("schemas dir not found: {$schemasDir}");
        }

        $files = glob(rtrim($schemasDir, '/') . '/*.tl') ?: [];
        $tdl = glob(rtrim($schemasDir, '/') . '/*.tdl') ?: [];
        $files = array_merge($files, $tdl);
        sort($files);
        if ($files === []) {
            throw new TlRegenerateException("no .tl/.tdl scheme files in {$schemasDir}");
        }

        $combined = $this->parseAll($files);
        $counts = $combined->counts();
        $counts['files'] = count($files);

        $this->gate($combined, $outputDir);

        $mig = new MigrationGenerator();
        $migFiles = $mig->generate($combined);
        $modelFiles = (new ModelGenerator())->generate($combined);
        $dtoFiles = (new DtoGenerator())->generate($combined);
        $factoryFiles = (new FactoryGenerator())->generate($combined);

        $this->wipe($outputDir);
        $this->writeAll($outputDir . '/generated/migrations', $migFiles);
        $this->writeAll($outputDir . '/generated/Models', $modelFiles);
        $this->writeAll($outputDir . '/generated/Data', $dtoFiles);
        $this->writeAll($outputDir . '/generated/Factories', $factoryFiles);

        $stats = $mig->stats();
        $counts['tables'] = count($stats['tables']);
        $counts['fks'] = $stats['fk_count'];

        $manifest = Manifest::build(
            $combined->layer,
            $counts,
            $stats['tables'],
            $stats['fk_count'],
            $combined->crcMismatches,
        );
        $manifest['sources'] = array_map('basename', $files);
        $manifest['hash'] = Manifest::hash($manifest);
        file_put_contents($outputDir . '/generated/schema-manifest.json',
            json_encode($manifest, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) . "\n");

        return ['counts' => $counts, 'manifest' => $manifest];
    }

    /** @param list<string> $files */
    private function parseAll(array $files): TlScheme
    {
        $layer = 0;
        foreach ($files as $file) {
            $layer = max($layer, self::layerFromFilename($file));
        }
        $combined = new TlScheme($layer);
        foreach ($files as $file) {
            $scheme = TlParser::parseFile($file);
            foreach ($scheme->types() as $type) {
                foreach ($type->constructors() as $ctor) {
                    $existing = $combined->types()[$ctor->resultType] ?? null;
                    if ($existing !== null && isset($existing->constructors()[$ctor->name])) {
                        $combined->removeConstructor($ctor->name);
                    }
                    $combined->addConstructor($ctor);
                }
            }
            foreach ($scheme->methods() as $method) {
                $combined->addMethod($method);
            }
            foreach ($scheme->crcMismatches as $name => $mm) {
                $combined->crcMismatches[$name] = $mm;
            }
        }
        return $combined;
    }

    /** Regex-free version tag extraction: 'TL_telegram_v227.tl' / 'api-v229.tdl' → 227 / 229, else 0. */
    private static function layerFromFilename(string $file): int
    {
        $name = basename($file);
        $ext = '';
        foreach (['.tl', '.tdl', '.dl', '.l'] as $candidate) {
            if (str_ends_with($name, $candidate) && strlen($name) > strlen($candidate)) {
                $ext = $candidate;
                break;
            }
        }
        if ($ext === '') {
            return 0;
        }
        $stem = substr($name, 0, -strlen($ext));
        $runStart = strlen($stem) - strspn(strrev($stem), '0123456789');
        if ($runStart === strlen($stem) || $runStart === 0 || $stem[$runStart - 1] !== 'v') {
            return 0;
        }
        return (int) substr($stem, $runStart);
    }

    private function gate(TlScheme $combined, string $outputDir): void
    {
        $manifestPath = $outputDir . '/generated/schema-manifest.json';
        if ($this->force || !is_file($manifestPath)) {
            return;
        }
        $prev = json_decode((string) file_get_contents($manifestPath), true);
        $prevCtors = (int) ($prev['counts']['constructors'] ?? 0);
        if ($prevCtors === 0) {
            return;
        }
        $now = $combined->counts()['constructors'];
        if (abs($now - $prevCtors) / $prevCtors > 0.30) {
            throw new TlRegenerateException(sprintf(
                'constructor count changed by more than 30%% (%d -> %d); pass --force if intentional',
                $prevCtors,
                $now,
            ));
        }
    }

    private function wipe(string $outputDir): void
    {
        foreach (['migrations', 'Models', 'Data', 'Factories'] as $dir) {
            $path = $outputDir . '/generated/' . $dir;
            if (is_dir($path)) {
                exec('rm -rf ' . escapeshellarg($path));
            }
        }
        $manifest = $outputDir . '/generated/schema-manifest.json';
        if (is_file($manifest)) {
            unlink($manifest);
        }
        if (!is_dir($outputDir . '/generated')) {
            mkdir($outputDir . '/generated', 0777, true);
        }
    }

    /** @param array<string,string> $files */
    private function writeAll(string $dir, array $files): void
    {
        foreach ($files as $name => $content) {
            $path = $dir . '/' . $name;
            @mkdir(dirname($path), 0777, true);
            file_put_contents($path, $content);
        }
    }
}

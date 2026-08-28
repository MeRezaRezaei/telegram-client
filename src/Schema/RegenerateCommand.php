<?php

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema;

use Illuminate\Console\Command;
use MeRezaRezaei\TelegramClient\Schema\Generator\SchemaRegenerator;

/** artisan telegram-client:regenerate — rebuild the committed mirror from tracked schemes. */
final class RegenerateCommand extends Command
{
    protected $signature = 'telegram-client:regenerate
        {--force : Bypass the ±30% constructor-count sanity gate}
        {--schemas= : Scheme directory (default: package schemas/)}
        {--out= : Output directory (default: package root)}';

    protected $description = 'Regenerate migrations/models/DTOs/factories from tracked TL schemes';

    public function handle(SchemaRegenerator $engine): int
    {
        $packageRoot = dirname(__DIR__);
        $schemas = (string) ($this->option('schemas') ?: $packageRoot . '/schemas');
        $out = (string) ($this->option('out') ?: $packageRoot);

        $engine->force((bool) $this->option('force'));
        $result = $engine->regenerate($schemas, $out);
        $c = $result['counts'];

        $this->info(sprintf(
            'regenerated: %d files, %d types, %d constructors, %d methods, %d tables, %d deferred FKs (manifest hash %s)',
            $c['files'], $c['types'], $c['constructors'], $c['methods'], $c['tables'], $c['fks'],
            substr($result['manifest']['hash'], 0, 12),
        ));
        return self::SUCCESS;
    }
}

<?php

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Tests\Schema;

use PHPUnit\Framework\TestCase;

final class PortSmokeTest extends TestCase
{
    public function testPortedClassesExist(): void
    {
        $prefix = 'MeRezaRezaei\\TelegramClient\\Schema\\';
        $classes = ['Generator\\SchemaRegenerator', 'Generator\\Naming', 'Generator\\MigrationGenerator',
            'Eloquent\\TlAnchorModel', 'Generator\\TlParser', 'Generator\\TlCanon',
            'Generator\\ModelGenerator', 'Generator\\DtoGenerator', 'Generator\\FactoryGenerator',
            'Generator\\Model\\TlScheme', 'Eloquent\\TlInstanceModel', ];
        foreach ($classes as $c) {
            $this->assertTrue(class_exists($prefix . $c), $c);
        }
        $this->assertTrue(trait_exists($prefix . 'Eloquent\\HasTlChildren'));
    }

    public function testPortedModifiersPreserved(): void
    {
        // final where the fork had final; TlAnchorModel is the abstract Eloquent base.
        $this->assertTrue((new \ReflectionClass(\MeRezaRezaei\TelegramClient\Schema\Generator\SchemaRegenerator::class))->isFinal());
        $this->assertTrue((new \ReflectionClass(\MeRezaRezaei\TelegramClient\Schema\Generator\Naming::class))->isFinal());
        $this->assertTrue((new \ReflectionClass(\MeRezaRezaei\TelegramClient\Schema\Generator\MigrationGenerator::class))->isFinal());
        $this->assertTrue((new \ReflectionClass(\MeRezaRezaei\TelegramClient\Schema\Eloquent\TlAnchorModel::class))->isAbstract());
        $this->assertTrue((new \ReflectionClass(\MeRezaRezaei\TelegramClient\TelegramClientServiceProvider::class))->isFinal());
    }

    public function testNoAgplHeadersShip(): void
    {
        $it = new \RecursiveIteratorIterator(new \RecursiveDirectoryIterator(dirname(__DIR__, 2) . '/src'));
        foreach ($it as $f) {
            if ($f->getExtension() === 'php') {
                $this->assertStringNotContainsString('AFFERO', (string) file_get_contents($f->getPathname()), $f->getPathname());
            }
        }
    }
}

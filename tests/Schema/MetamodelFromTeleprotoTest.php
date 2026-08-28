<?php

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Tests\Schema;

use PHPUnit\Framework\TestCase;
use MeRezaRezaei\TelegramClient\Schema\Generator\SchemaRegenerator;
use MeRezaRezaei\TelegramClient\Schema\Generator\TeleprotoSchemeLoader;
use MeRezaRezaei\TelegramClient\Schema\Generator\TlCanon;

/**
 * Task 2 gate: the metamodel loads from teleproto's committed layer-229
 * schema/sources/*.tl via teleproto's TLSignatureParser — not fork-local .tl.
 *
 * Count reality (committed sources, NOT the full official schema):
 * api.tl + mtproto.tl carry ~1.7k constructors / ~830 methods at LAYER 229.
 * The plan's ">7000 constructors" assumed the full official file; the
 * committed sources are the ground truth (see task-2 report).
 */
final class MetamodelFromTeleprotoTest extends TestCase
{
    private static TlSchemeCache $cache;

    public static function setUpBeforeClass(): void
    {
        self::$cache = new TlSchemeCache();
    }

    private function scheme(): \MeRezaRezaei\TelegramClient\Schema\Generator\Model\TlScheme
    {
        return self::$cache->scheme ??= (new SchemaRegenerator())->loadScheme();
    }

    public function test_loads_layer_229_from_committed_sources(): void
    {
        self::assertSame(229, $this->scheme()->layer);
    }

    public function test_method_and_constructor_bands(): void
    {
        $counts = $this->scheme()->counts();
        self::assertGreaterThan(700, $counts['methods'], 'methods');
        self::assertGreaterThan(1500, $counts['constructors'], 'constructors');
    }

    public function test_user_constructor_spot_check(): void
    {
        $user = $this->scheme()->types()['User']->constructors()['user'] ?? null;
        self::assertNotNull($user, 'constructor user missing');
        // Ground truth: committed layer-229 api.tl carries user#b1b8cc83
        // (the plan's 31774388 is teleproto's curated layer-227 registry id).
        self::assertSame('b1b8cc83', sprintf('%08x', $user->id));
        $id = $user->params()['id'] ?? null;
        self::assertNotNull($id, 'user.id param missing');
        self::assertSame('long', $id->baseType());
    }

    public function test_messages_send_message_spot_check(): void
    {
        $m = $this->scheme()->methods()['messages.sendMessage'] ?? null;
        self::assertNotNull($m, 'method messages.sendMessage missing');
        $message = $m->params()['message'] ?? null;
        self::assertNotNull($message, 'messages.sendMessage.message param missing');
        self::assertSame('string', $message->baseType());
        $silent = $m->params()['silent'] ?? null;
        self::assertNotNull($silent);
        self::assertSame([['flags', 5]], [$silent->conditional()]);
    }

    public function test_mtproto_sources_merged(): void
    {
        self::assertArrayHasKey('pong', $this->scheme()->types()['Pong']->constructors());
        self::assertArrayHasKey('ping', $this->scheme()->methods());
    }

    public function test_id_less_constructors_get_tlcanon_crc(): void
    {
        $ctor = $this->scheme()->types()['TlsBlock']->constructors()['tlsBlockDomain'] ?? null;
        self::assertNotNull($ctor, 'id-less tlsBlockDomain missing');
        $expected = hexdec(hash('crc32b', TlCanon::normalize('tlsBlockDomain = TlsBlock')));
        self::assertSame($expected, $ctor->id, 'id must be TlCanon-computed, never invented');
        self::assertNotSame(0, $ctor->id);
    }

    public function test_generic_wrappers_survive_as_fillers(): void
    {
        $m = $this->scheme()->methods()['invokeWithLayer'] ?? null;
        self::assertNotNull($m);
        self::assertSame('X', $m->returnType);
        self::assertSame('da9b0d0d', sprintf('%08x', $m->id));
        $named = $m->params();
        self::assertArrayNotHasKey('__generic__', $named, 'generic fillers must be excluded');
        self::assertSame('int', $named['layer']->baseType());
    }

    public function test_sources_dir_is_overridable(): void
    {
        $dir = TeleprotoSchemeLoader::defaultSourcesDir();
        self::assertFileExists($dir . '/api.tl');
        self::assertFileExists($dir . '/mtproto.tl');

        $scheme = (new SchemaRegenerator())->loadScheme($dir);
        self::assertSame(229, $scheme->layer);
        self::assertGreaterThan(700, $scheme->counts()['methods']);
    }
}

/** Tiny static cache so the 8k-line parse happens once per test run. */
final class TlSchemeCache
{
    public ?\MeRezaRezaei\TelegramClient\Schema\Generator\Model\TlScheme $scheme = null;
}

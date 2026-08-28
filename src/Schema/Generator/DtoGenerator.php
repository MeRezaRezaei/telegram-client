<?php

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generator;

use MeRezaRezaei\TelegramClient\Schema\Generator\Model\TlConstructor;
use MeRezaRezaei\TelegramClient\Schema\Generator\Model\TlMethod;
use MeRezaRezaei\TelegramClient\Schema\Generator\Model\TlParam;
use MeRezaRezaei\TelegramClient\Schema\Generator\Model\TlScheme;
use MeRezaRezaei\TelegramClient\Schema\Generator\Model\TlType;

/**
 * Emits spatie/laravel-data DTOs (spec §6.1): one abstract base per TL type
 * with union dispatch on the '_' key, one concrete Data per constructor, and
 * request Data classes for RPC methods.
 */
final class DtoGenerator
{
    private const TYPES_NS = 'MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types';
    private const METHODS_NS = 'MeRezaRezaei\TelegramClient\Schema\Generated\Data\Methods';

    /** @return array<string,string> relative path (Data/...) => content */
    public function generate(TlScheme $scheme): array
    {
        $files = [];
        $classes = [];

        $types = $scheme->types();
        ksort($types);
        foreach ($types as $type) {
            if ($type->name === 'Vector t' || $type->constructors() === []) {
                continue;
            }
            $this->abstractBase($type, $scheme, $files, $classes);
            $ctors = $type->constructors();
            ksort($ctors);
            foreach ($ctors as $ctor) {
                $this->ctorData($type, $ctor, $scheme, $files, $classes);
            }
        }

        $methods = $scheme->methods();
        ksort($methods);
        foreach ($methods as $method) {
            $this->methodData($method, $files, $classes);
        }

        Naming::assertUnique($classes, 'data class');
        ksort($files);
        return $files;
    }

    /** @param array<string,string> $files @param-out modified
     * @param list<string> $classes */
    private function abstractBase(TlType $type, TlScheme $scheme, array &$files, array &$classes): void
    {
        $class = Naming::abstractDataClass($type->name);
        $classes[] = $class;

        $dispatch = [];
        $ctors = $type->constructors();
        ksort($ctors);
        foreach ($ctors as $ctor) {
            $dispatch[] = "        '" . $ctor->name . "' => \\" . self::TYPES_NS . '\\' . Naming::dataClass($ctor->name) . '::class,';
        }

        $body = [
            '/**',
            ' * Union DTO base for TL type ' . $type->name . '.',
            ' *',
            ' * @method static static fromWire(array $payload)',
            ' */',
            'abstract class ' . $class . ' extends Data',
            '{',
            '    /** @var array<string, class-string<self>> */',
            '    protected const DISPATCH = [',
            ...$dispatch,
            '    ];',
            '',
            '    /** Dispatch on the constructor name carried under the \'_\' key of a decoded wire payload. */',
            '    public static function fromWire(array $payload): static',
            '    {',
            "        \$class = static::DISPATCH[\$payload['_']]",
            "            ?? throw new \\InvalidArgumentException('Unknown constructor ' . \$payload['_'] . ' for " . $type->name . "');",
            '        /** @var static */',
            '        return $class::from($payload);',
            '    }',
            '}',
        ];
        $files['Types/' . $class . '.php'] = CodeWriter::phpFile(self::TYPES_NS, [
            'use Spatie\LaravelData\Data;',
            '',
            ...$body,
        ]);
    }

    /** @param array<string,string> $files @param-out modified
     * @param list<string> $classes */
    private function ctorData(TlType $type, TlConstructor $ctor, TlScheme $scheme, array &$files, array &$classes): void
    {
        $class = Naming::dataClass($ctor->name);
        $classes[] = $class;

        $props = [];
        foreach ($ctor->params() as $param) {
            if ($param->isFiller || $param->kind() === 'generic') {
                continue;
            }
            $props[] = '    public ' . $this->propType($param, $scheme) . ' $' . self::camel($param->name) . ',';
        }
        $docblock = $this->bytesDocblock($ctor);

        $body = [
            ...$docblock,
            'final class ' . $class . ' extends ' . Naming::abstractDataClass($type->name),
            '{',
            '    public function __construct(',
            ...$props,
            '    ) {',
            '    }',
            '}',
        ];
        $uses = ['use Spatie\LaravelData\Data;', ''];
        // base class import when in same namespace not needed (same NS); Data needed for from()
        $files['Types/' . $class . '.php'] = CodeWriter::phpFile(self::TYPES_NS, [
            'use Spatie\\LaravelData\\Data;',
            '',
            ...$body,
        ]);
    }

    /** @param array<string,string> $files @param-out modified
     * @param list<string> $classes */
    private function methodData(TlMethod $method, array &$files, array &$classes): void
    {
        $class = Naming::dataClass($method->name);
        $classes[] = $class;

        $props = [];
        foreach ($method->params() as $param) {
            if ($param->isFiller || $param->kind() === 'generic') {
                continue;
            }
            $props[] = '    public ' . $this->propType($param, null) . ' $' . self::camel($param->name) . ',';
        }

        $body = [
            '/** Request DTO for RPC method ' . $method->name . ' (crc32 ' . sprintf('%08x', $method->id) . '), returns ' . $method->returnType . '. */',
            'final class ' . $class . ' extends Data',
            '{',
            '    public const METHOD = \'' . $method->name . '\';',
            '',
            '    public static function method(): string',
            '    {',
            '        return self::METHOD;',
            '    }',
            '',
            '    public function __construct(',
            ...$props,
            '    ) {',
            '    }',
            '}',
        ];
        $files['Methods/' . $class . '.php'] = CodeWriter::phpFile(self::METHODS_NS, [
            'use Spatie\\LaravelData\\Data;',
            '',
            ...$body,
        ]);
    }

    private function propType(TlParam $param, ?TlScheme $scheme): string
    {
        $nullable = $param->conditional() !== null ? '?' : '';
        if ($param->kind() === 'vector') {
            return $nullable . 'array';
        }
        if ($param->kind() === 'ref') {
            $target = $param->baseType();
            if ($scheme === null
                || $param->isAny()
                || str_contains($target, '<')
                || in_array($target, ['Object', 'Type', 'TLObject', 'X', 'True'], true)
                || !isset($scheme->types()[$target])
                || $scheme->types()[$target]->constructors() === []) {
                return 'mixed'; // mixed already includes null; no '?' prefix
            }
            return $nullable . '\\' . self::TYPES_NS . '\\' . Naming::abstractDataClass($target);
        }
        return match ($param->baseType()) {
            'int', 'long', '#' => 'int',
            'int128', 'int256', 'string', 'bytes' => 'string',
            'double' => 'float',
            'true' => 'bool',
            default => 'mixed',
        };
    }

    /** @return list<string> */
    private function bytesDocblock(TlConstructor $ctor): array
    {
        $bytesParams = [];
        foreach ($ctor->params() as $param) {
            if ($param->baseType() === 'bytes' && $param->kind() === 'scalar') {
                $bytesParams[] = $param->name;
            }
        }
        $lines = ['/** DTO for ' . $ctor->name . ' of ' . $ctor->resultType . '.'];
        if ($bytesParams !== []) {
            $lines[] = ' *';
            $lines[] = ' * bytes params carried as base64 strings: ' . implode(', ', $bytesParams);
        }
        $lines[] = ' */';
        return $lines;
    }

    private static function camel(string $name): string
    {
        return lcfirst(implode('', array_map('ucfirst', explode('_', $name))));
    }
}

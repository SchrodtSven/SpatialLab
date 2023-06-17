<?php

declare(strict_types=1);
/**
 * Class handling string contents with OOP interface
 * 
 * @see https://www.php.net/manual/en/control-structures.alternative-syntax.php
 * 
 * @author Sven Schrodt<sven@schrodt.club>
 * @link https://github.com/SchrodtSven/SpatialLab
 * @package SpatialLab
 * @version 0.1
 * @since 2023-06-16
 */



namespace SpatialLab\Internal;

use SpatialLab\Internal\TestClass;
use SpatialLab\Internal\Type\StringClass;

class StringClassTest extends TestClass
{
    public function testBasix(): void
    {
        $u = 'Foo';
        $a = new StringClass($u);
        $this->assertInstanceOf(StringClass::class, $a);
        $this->assertSame($u, (string) $a);
    }


    /**
     * Testing string prepending
     *
     * @dataProvider prependProvider
     * @return void
     */
    public function testPrepend(string $original, string $plus, string $result): void
    {
        $foo = new StringClass($original);
        $this->assertSame((string) $foo->prepend($plus), $result);

    }

    /**
     * Testing string appending
     *
     * @dataProvider appendProvider
     * @return void
     */
    public function testAppend(string $original, string $plus, string $result): void
    {
        $foo = new StringClass($original);
        $this->assertSame((string) $foo->append($plus), $result);

    }

     /**
     * Testing string replacing
     *
     * @dataProvider replaceProvider
     * @return void
     */
    public function testReplace(string $original, string $find, string $replace, string $result): void
    {
        $foo = new StringClass($original);
        $this->assertSame((string) $foo->replace($find, $replace), $result);

    }

    public function testRollbackSaveToggle(): void
    {
        $a = 'FOO';
        $plus = 'bar';

        $testString = new StringClass($a);
        $this->assertSame((string) $testString, $a);
        $testString->append($plus);
        $this->assertSame((string) $testString, $a . $plus);
        $testString->rollback();
        $this->assertSame($testString->raw(), $a);
        $testString->prepend($plus);
        $this->assertSame($testString->raw(), $plus . $a);
        $testString->toggle();
        $this->assertSame($testString->previous(), $plus . $a);
        $this->assertSame($testString->raw(), $a);
        $testString->rollback();
        $this->assertSame($testString->raw(), $plus . $a);
    }

    public static function prependProvider(): array
    {
        return [
            ['Foo', 'Bar', 'BarFoo']
        ];
    }

    public static function appendProvider(): array
    {
        return [
            ['Foo', 'Bar', 'FooBar']
        ];
    }


    public static function replaceProvider(): array
    {
        return [
            ['FooBar', 'Bar', '', 'Foo'],
            ['CatDog', 'og', '', 'CatD'],

        ];
    }
}

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

class FooTest extends TestClass
{
    public function testFoo(): void
    {
        $this->assertTrue(2*2 === 4);
    }
}

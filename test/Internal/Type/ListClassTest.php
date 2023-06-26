<?php

declare(strict_types=1);
/**
 * Testing StringClass (incl. used traits)
 * 
 * @author Sven Schrodt<sven@schrodt.club>
 * @link https://github.com/SchrodtSven/SpatialLab
 * @package SpatialLab
 * @version 0.1
 * @since 2023-06-16
 */



namespace SpatialLab\Internal;

use SpatialLab\Internal\TestClass;
use SpatialLab\Internal\Type\ListClass;
use SpatialLab\Internal\Type\StringClass;

class ListClassTest extends TestClass
{
    public function testBasix(): void
    {
        $data = [null, 'Foo', 23, ''];

        $a = new ListClass($data);
        $this->assertInstanceOf(ListClass::class, $a);
        $this->assertTrue($a->count() === 4);
        $a->trim();
        $this->assertSame($a->count(), 2);
    }

    public function testStackOps(): void
    {
        $tmp = new ListClass([2, 3, 66, 8]);
        $tmp->push(999);
        $this->assertTrue(count($tmp) === 5);
        $this->assertSame(999, $tmp->pop()); 
        $this->assertTrue(count($tmp) === 4);
        $tmp->unshift(888);
        $this->assertTrue(count($tmp) === 5);
        $this->assertTrue($tmp->shift() === 888);  
        $this->assertTrue($tmp->firstKey() === 0);
        $this->assertTrue($tmp->lastKey() === count($tmp) -1);
    }

}

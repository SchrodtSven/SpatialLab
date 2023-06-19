<?php declare(strict_types=1);
/**
 * Testing Sherlock
 * 
 * @author Sven Schrodt<sven@schrodt.club>
 * @link https://github.com/SchrodtSven/SpatialLab
 * @package SpatialLab
 * @version 0.1
 * @since 2023-06-16
 */



namespace SpatialLab\Internal;



use SpatialLab\Internal\Type\Handler\Sherlock;

class SherlockTest extends TestClass
{

    /**
     * Undocumented function
     *
     * @dataProvider typeStringProvider
     * @param string $value
     * @param mixed $parsed
     * @param string $type
     * @return void
     */
    public function testTypeString(string $value, mixed $detected, string $type): void
    {
       //var_dump([$value, $detected, $type]); 
       $this->assertSame(Sherlock::typeString($value), $detected);
       $this->assertTrue(Sherlock::detectType((string) $detected) === $type);
        
    }

    public static function typeStringProvider(): array
    {
        return [
            ['12', 12, 'int'],
            ['23.123', 23.123, 'float'],
            ['23', 23, 'int'],
        ];
    }

    /**
     * Undocumented function
     *
     * @dataProvider numericDataProvider
     * @return void
     */
    public function testNonDecToDecConversion(string $nonDec, int $dec): void
    {
        $this->assertSame(Sherlock::nonDecNumericToInt($nonDec), $dec);
    }

   public static function numericDataProvider(): array
   {
    return [
        ['0x11', 17],
        ['0b11', 3],
        ['0B10', 2],
        ['0o11', 9],
        ['0xff', 255],
        ['0b111', 7],
        ['77', 77],
        ['0xff', 255],
        ['0B1111111', 127]
    ];
   }

}
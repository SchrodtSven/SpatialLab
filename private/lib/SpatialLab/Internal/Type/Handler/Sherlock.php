<?php

declare(strict_types=1);
/**
 * Class detecting type|value|limits dfor given data structure
 * 
 * @author Sven Schrodt<sven@schrodt.club>
 * @link https://github.com/SchrodtSven/SpatialLab
 * @package SpatialLab
 * @version 0.1
 * @since 2023-06-18
 */

namespace SpatialLab\Internal\Type\Handler;
use SpatialLab\Internal\Type\StringClass;
use SpatialLab\Internal\Type\Dry\IteratorTrait;
use SpatialLab\Internal\Type\Dry\StackOperationTrait;
use SpatialLab\Internal\Type\Dry\ArrayAccessTrait;
use SpatialLab\Internal\Type\Dry\CallbackArrayTrait;

class Sherlock
{
   public static function detectType(mixed $data): string
   {

        return match(true) {
            (is_numeric($data)) => static::getNumericType($data),
            (is_array($data)) => 'array',
            (is_object($data)) => $data::class,
            (is_bool($data)) => 'bool',
            (is_string($data)) => 'string'
        };
   }


   public static function getNumericType(string $numericValue): string
   {
    return ((int) $numericValue == (float) $numericValue) ? 'int' : 'float';
   }

}

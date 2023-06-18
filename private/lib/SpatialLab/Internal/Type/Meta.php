<?php

declare(strict_types=1);
/**
 * Class handling Lists (int indexed 0 based [])  with OOP interface
 * 
 * @author Sven Schrodt<sven@schrodt.club>
 * @link https://github.com/SchrodtSven/SpatialLab
 * @package SpatialLab
 * @version 0.1
 * @since 2023-06-18
 */

namespace SpatialLab\Internal\Type;
use SpatialLab\Internal\Type\StringClass;

class Meta
{
    public const FLOAT_NAME = 'float';


    public const TYPE_MATCH = [
        'double' => 'float',
        'boolean' => 'bool',
        'bool' => 'bool'
    ];
}

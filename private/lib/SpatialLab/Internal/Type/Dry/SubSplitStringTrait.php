<?php declare(strict_types=1);
/**
 * Trait managing sub string and string splitting operations
 * 
 * 
 * @author Sven Schrodt<sven@schrodt.club>
 * @link https://github.com/SchrodtSven/SpatialLab
 * @package SpatialLab
 * @version 0.1
 * @since 2023-06-17
 */

namespace SpatialLab\Internal\Type\Dry;
use SpatialLab\Internal\Type\ListClass;

trait SubSplitStringTrait
{

    public function splitBy( \Stringable | string $separator = ' '): ListClass
    {
        return new ListClass(explode($separator, $this->content));
    }
}
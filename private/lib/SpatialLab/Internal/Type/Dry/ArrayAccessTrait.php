<?php  declare(strict_types=1);
/**
 * Trait for classes implementing interface \ArrayAccess
 * 
 * Providing possibility of accessing objects as arrays
 * 
 * @author Sven Schrodt<sven@schrodt.club>
 * @link https://github.com/SchrodtSven/SpatialLab
 * @package SpatialLab
 * 
 * @version 0.1
 * @since 2023-06-17
 */

namespace SpatialLab\Internal\Type\Dry;

trait ArrayAccessTrait
{
    


    public function offsetGet($offset): mixed
    {
        return $this->current[$offset] ?? null;
    }

    public function offsetSet($offset, $value): void
    {
        if (is_null($offset)) {
            $this->current[] = $value;
        } else {
            $this->current[$offset] = $value;
        }
    }

    public function offsetExists($offset): bool
    {
        return isset($this->current[$offset]);
    }

    public function offsetUnset($offset): void
    {
        unset($this->current[$offset]);
    }

}
<?php  declare(strict_types=1);
/**
 * Trait for classes implementing functionality on applying callbacks to (internal) arrays
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

trait CallbackArrayTrait
{
   
    public function walk(callable $callback): self
    {
        array_walk($this->content, $callback);
        return $this;
    }

    public function filter(callable $callback): self
    {
        return new ListClass(\array_filter($this->content, $callback));
    }
}
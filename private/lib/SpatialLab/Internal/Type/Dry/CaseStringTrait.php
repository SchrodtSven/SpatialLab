<?php  declare(strict_types=1);
/**
 * Trait for case handling operations
 * 
 * 
 * @author Sven Schrodt<sven@schrodt.club>
 * @link https://github.com/SchrodtSven/SpatialLab
 * @package SpatialLab
 * @version 0.1
 * @since 2023-06-18
 */

namespace SpatialLab\Internal\Type\Dry;

trait CaseStringTrait
{
    public function lowerFirst(): self
    {   
        $this->save();
        $this->content = lcfirst($this->content);
        return $this;
    }

    public function upperFirst(): self
    {   
        $this->save();
        $this->content = ucfirst($this->content);
        return $this;
    }
}   
<?php

declare(strict_types=1);
/**
 * Class handling string contents with OOP interface
 * 
 * @author Sven Schrodt<sven@schrodt.club>
 * @link https://github.com/SchrodtSven/SpatialLab
 * @package SpatialLab
 * @version 0.1
 * @since 2023-06-16
 */

namespace SpatialLab\Internal\Type;
use SpatialLab\Internal\Type\ListClass;
use SpatialLab\Internal\Type\Dry\SubSplitStringTrait;
use SpatialLab\Internal\Type\Dry\MultiByteStringTrait;
use SpatialLab\Internal\Type\Dry\CaseStringTrait;

class StringClass implements \Stringable
{
    use SubSplitStringTrait;
    use MultiByteStringTrait;
    use CaseStringTrait;

    protected string $previous = '';

    public function __construct(protected string $content = '')
    {
        
    }

    public function prepend(\Stringable | string $plus): self
    {
        $this->save();
        $this->content =  (string) $plus . $this->content;
        return $this;
    }

    public function append(\Stringable | string $plus): self
    {
        $this->save();
        $this->content .= (string) $plus;
        return $this;
    }

    protected function save(): self
    {
        $this->previous = $this->content;
        return $this;
    }

    public function rollback(): self
    {
        $this->content = $this->previous;
        return $this;
    }

    public function toggle(): self
    {
        $tmp = $this->previous;
        $this->previous = $this->content;
        $this->content = $tmp;
        return $this;
    }

    public function replace(array|string $find, array|string $replace): self
    {
        $this->save();
        $this->content = str_replace($find, $replace, $this->content);
        return $this;
    }

    public function raw(): string 
    {
        return $this->content;
    }
    
    public function previous(): string
    {
        return $this->previous;
    }

    public function length(): int
    {
        return mb_strlen($this->content);
    }

    public function __toString(): string
    {
        return $this->content;
    }
}

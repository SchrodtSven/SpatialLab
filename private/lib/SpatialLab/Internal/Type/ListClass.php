<?php

declare(strict_types=1);
/**
 * Class handling Lists (int indexed 0 based [])  with OOP interface
 * 
 * @author Sven Schrodt<sven@schrodt.club>
 * @link https://github.com/SchrodtSven/SpatialLab
 * @package SpatialLab
 * @version 0.1
 * @since 2023-06-17
 */

namespace SpatialLab\Internal\Type;
use SpatialLab\Internal\Type\StringClass;
use SpatialLab\Internal\Type\Dry\IteratorTrait;
use SpatialLab\Internal\Type\Dry\StackOperationTrait;
use SpatialLab\Internal\Type\Dry\ArrayAccessTrait;
use SpatialLab\Internal\Type\Dry\CallbackArrayTrait;

class ListClass implements \Iterator, \ArrayAccess, \Countable
{
    use ArrayAccessTrait;
    use StackOperationTrait;
    use IteratorTrait;
    use CallbackArrayTrait;

    protected array $previous = [];

    public function __construct(protected array $content = [])
    {
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

    public function raw(): array
    {
        return $this->content;
    }

    public function toggle(): self
    {
        $tmp = $this->previous;
        $this->previous = $this->content;
        $this->content = $tmp;
        return $this;
    }
     
    public function previous(): array
    {
        return $this->previous;
    }

    public function count(): int
    {
        return count($this->content);
    }

    // @FIXME !!!
    public function trim(): self
    {
        
        if(empty($this->content[$this->count()-1]))
            $this->pop();
    
        if(empty($this->content[0]))
            $this->shift();

        return $this;
    }

    public function merge(array | ListClass $data): self
    {
        $data = (is_array($data)) ? $data : $data->raw();
        $this->content = array_merge($this->content, $data);
        return $this;
    }
}

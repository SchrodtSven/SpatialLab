<?php declare(strict_types=1);
/**
 * Abstarct action controller class 
 * 
 * @author Sven Schrodt<sven@schrodt.club>
 * @link https://github.com/SchrodtSven/SpatialLab
 * @package SpatialLab
 * @version 0.1
 * @since 2023-06-18
 */

namespace SpatialLab\App;
use SpatialLab\Internal\Type\StringClass;
use SpatialLab\Internal\Type\ListClass;
use SpatialLab\Communication\Http\Request;
use SpatialLab\Communication\Http\Response;
use SpatialLab\Config\Main;
use SpatialLab\App\Front;

abstract class Action
{
    
    public function __construct(protected Front $front)
    {   
       //    echo 'I\'am ' . __CLASS__;
       
    }

    public function __call(string $name, array $arguments): void
    {
        echo static::class . ' called ' . $name . ' actually it is Action::__call pretending to be <code><b>' . $name . '</b></code>' ;       
        echo '<pre> ' . var_dump($this->front->getParams());
    }
}
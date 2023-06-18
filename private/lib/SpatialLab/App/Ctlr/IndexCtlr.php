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

namespace SpatialLab\App\Ctlr;
use SpatialLab\Internal\Type\StringClass;
use SpatialLab\Internal\Type\ListClass;
use SpatialLab\Communication\Http\Request;
use SpatialLab\Communication\Http\Response;
use SpatialLab\Config\Main;
use SpatialLab\App\Action;

class IndexCtlr extends Action
{               // defaultActn
   public function defaultActn(): void
   {
        echo "default action called within " . self::class;
        echo '<pre> ' . var_dump($this->front->getParams());
   }
}
<?php declare(strict_types=1);
/**
 * Class for rendering (“phtml”) templates in alternative PHP syntax 
 * 
 * - 
 * 
 * @see https://www.php.net/manual/en/control-structures.alternative-syntax.php
 * 
 * @author Sven Schrodt<sven@schrodt.club>
 * @link https://github.com/SchrodtSven/SpatialLab
 * @package SpatialLab
 * @version 0.1
 * @since 2023-06-16
 */

namespace SpatialLab\App;

final class Renderer
{
     private function renderTpl(string $tpl)
     {
        if(!file_exists($tpl)) {
            throw new \InvalidArgumentException('File does not exists: ' . $tpl);
        }
     }
}
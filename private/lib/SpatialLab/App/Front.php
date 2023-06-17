<?php declare(strict_types=1);
/**
 * Front controller class 
 * 
 * - parsing request to $controller/$action/$params
 * 
 * @author Sven Schrodt<sven@schrodt.club>
 * @link https://github.com/SchrodtSven/SpatialLab
 * @package SpatialLab
 * @version 0.1
 * @since 2023-06-16
 */

namespace SpatialLab\App;

class Front
{
    public function __construct()
    {   
        echo 'I\'am ' . __CLASS__;
    }

    private function route()
    {
        // URI-> $CTRL;$ACTN;$PARAMS
    }

    public function dispatch()
    {
        //->$ctrl->$action($params)
    }
}
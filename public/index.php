<?php
//chdir('../');
require_once 'private/lib/SpatialLab/Application.php';
use SpatialLab\App\Front;
use SpatialLab\Internal\Type\StringClass;
use SpatialLab\Communication\Http\Request;
use SpatialLab\Communication\Http\Response;

$frontController = new Front(new Request, new Response);
// var_dump($frontController->getParams()); 
// var_dump([
//     $frontController->getActionName(),
//     $frontController->getControllerName()
// ]); 
$frontController->dispatch();
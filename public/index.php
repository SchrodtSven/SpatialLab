<?php
chdir('../');
require_once 'private/lib/SpatialLab/Application.php';
use SpatialLab\App\Front;
use SpatialLab\Internal\Type\StringClass;

var_dump(new Front);
var_dump($_SERVER); 
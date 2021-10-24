<?php 

use \App\Events\Events;
use \App\Factory\Example;
use \App\TestBuilder\Example as Test;
require 'vendor/autoload.php';



$new = new Example();

$new->demonstrate();

$new = new Test();

$new->demonstrate();
<?php 

use \App\Factory\Example as Factory;
use \App\TestBuilder\Example as Test;
use \App\Singleton\Example as Singleton;
use \App\State\Example as State;
require 'vendor/autoload.php';



$new = new Factory();

$new->demonstrate();

$new = new Test();

$new->demonstrate();

$new = new Singleton();
$new->demonstrate();

$new = new State();
$new->demonstrate();
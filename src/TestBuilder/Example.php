<?php

namespace App\TestBuilder;

use App\TestBuilder\Test;

class Example {

    public function demonstrate() : void
    {
       Test::setTest('my string')
            ->is('string')
            ->equal('my string')
            ->report();

        Test::setTest(['name' => 'André'])
            ->is('array')
            ->hasProperty('name')
            ->report();

        $object = new class {
            public $name = 'André';
            public $hasElements = true;
        
            public function myMethod($arg) { 
                return true;
            }
        };

        Test::setTest($object)
            ->is('object')
            ->hasProperty('name')
            ->focusOnProperty('name')
            ->is('string')
            ->equal('André')
            ->focusOnOriginal()
            ->hasProperty('hasElements')
            ->focusOnProperty('hasElements')
            ->is('boolean')
            ->isTrue()
            ->equal(true)
            ->focusOnOriginal()
            ->hasMethod('myMethod')
            ->report();
        
        $date = \DateTime::createFromFormat('d/m/Y', date('d/m/Y'));

        Test::setTest($date)
            ->is('object')
            ->instanceof('DateTime')
            ->report();

    }
   
}
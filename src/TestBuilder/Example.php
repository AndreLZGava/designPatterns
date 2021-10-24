<?php

namespace App\TestBuilder;

use App\TestBuilder\Test;

class Example {

    public function demonstrate() : void
    {
       Test::IWill('my string')
            ->is('string')
            ->equal('my string')
            ->report();

        Test::IWill(['name' => 'André'])
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

        Test::IWill($object)
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
            ->report();

    }
   
}
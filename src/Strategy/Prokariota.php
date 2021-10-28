<?php

namespace App\Strategy;

class Prokariota implements LifeInterface {
    public function say() : void {
        echo "I'm Prokariot</br>";
    }
}
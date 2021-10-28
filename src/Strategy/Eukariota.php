<?php

namespace App\Strategy;

class Eukariota implements LifeInterface {
    public function say() : void {
        echo "I'm Eukariot<br/>";
    }
}
<?php

namespace App\Strategy;

class Life {
    protected $kind;

    public function __construct(LifeInterface $lifeinterface)
    {
        $this->kind = $lifeinterface;
    }

    public function evolve(LifeInterface $lifeinterface)
    {
        $this->kind = $lifeinterface;
    }

    public function whatAmI() : void {
        echo "Im alive <br/>";
        $this->kind->say();
    }
}
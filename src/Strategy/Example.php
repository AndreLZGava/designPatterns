<?php

namespace App\Strategy;

class Example
{
    public function demonstrate(): void
    {
        $strategy = new \App\Strategy\Life(new \App\Strategy\Eukariota());
        $strategy->whatAmI();

        $strategy->evolve(new \App\Strategy\Prokariota());
        $strategy->whatAmI();

    }
}

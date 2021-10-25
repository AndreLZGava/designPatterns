<?php

namespace App\State;

use \App\State\State;

class Running extends State
{

    public function toRun(): void
    {
        echo ("already running <br/>");
    }

    public function toOpen(): void
    {
        echo ("can't go back to open, already running! <br/>");
    }

    public function toDone(): void
    {
        echo ("goes to done! <br/>");
        $this->context->changeTo(new \App\State\Done());
    }
}

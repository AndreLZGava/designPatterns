<?php

namespace App\State;

use \App\State\State;

class Open extends State
{

    public function toRun(): void
    {
        echo ("goes to running! <br/>");
        $this->context->changeTo(new \App\State\Running());
    }

    public function toOpen(): void
    {
        echo ("already open! <br/>");
    }

    public function toDone(): void
    {
        echo ("can't go to to done without passing on running!<br/>");
    }
}

<?php

namespace App\State;

class Example
{
    public function demonstrate(): void
    {
        $state = new \App\State\Events(new \App\State\Open()); //open
        $state->toOpen();
        $state->toDone();
        $state->toRun();
        $state->toOpen();
        $state->toRun();
        $state->toDone();
        $state->toOpen();
        $state->toRun();
        $state->toDone();
    }
}

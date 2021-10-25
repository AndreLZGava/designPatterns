<?php

namespace App\State;

class Events
{

    private State $state;

    public function __construct(State $state)
    {
        $this->changeTo($state);
    }

    public function changeTo(State $state): void
    {
        $this->state = $state;
        $this->state->setContext($this);
    }

    public function toRun(): void
    {
        $this->state->toRun();
    }

    public function toOpen(): void
    {
        $this->state->toOpen();
    }

    public function toDone(): void
    {
        $this->state->toDone();
    }
}

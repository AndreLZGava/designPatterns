<?php

namespace App\State;

abstract class State
{
    protected $context;

    public function setContext(Events $context)
    {
        $this->context = $context;
    }

    abstract public function toRun(): void;

    abstract public function toOpen(): void;

    abstract public function toDone(): void;
}

<?php

namespace App\Factory;

interface ValidatorInterface {
    public function validate(string $variable) : bool;
}
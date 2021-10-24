<?php

namespace App\Factory;

class PHone implements ValidatorInterface{

    public function validate( string $forValidation) : bool
    {
        $pattern = '/^[0-9]{9}+$/';
        return preg_match($pattern, $forValidation) === 1;
    }
}
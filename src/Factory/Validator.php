<?php

namespace App\Factory;

use \App\Factory\ValidatorInterface;

class Validator {

    public static $validators = [
        'email' => \App\Factory\Email::class,
        'cpf' => \App\Factory\CPF::class,
        'phone' => \App\Factory\Phone::class
    ];

    public static function make(string $validator) 
    {
        return new self::$validators[$validator];
    }
}
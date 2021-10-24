<?php

namespace App\Factory;

use App\Factory\Validator;

class Example {

    public function demonstrate() : void
    {
        $emailMustBeValid = Validator::make('email')->validate('andrelzgava@gmail.com');

        $emailMustNotBeValid = Validator::make('email')->validate('andrelzgava@@gmail.com@.com');

        $phoneValid = Validator::make('phone')->validate('999999999');

        $cpfInvalid = Validator::make('cpf')->validate('99999999999');
    }
   
}
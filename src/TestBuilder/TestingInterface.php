<?php
namespace App\TestBuilder;

interface TestingInterface {
    public static function setTest($element) : Test;
    public function isTrue() : Test;
    public function isFalse() : Test;
    public function isBlank() : Test;
    public function isNull() : Test;
    public function is(string $type) : Test;
    public function equal($value) : Test;
    public function instanceOf($value) : Test;
    public function hasProperty(string $value) : Test;
    public function report() : Test;
    public function focusOnProperty(string $property) : Test;
    public function focusOnOriginal() : Test;
    public function hasMethod(string $function) : Test;
}
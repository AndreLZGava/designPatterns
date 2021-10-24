<?php

namespace App\TestBuilder;

use \Exception;

class Test  implements TestingInterface{
    private $element;
    private $report = [];
    private $startTime;
    private $endTime;
    private $focused;

    const PERMITED_TYPES = ['array', 'object', 'string', 'boolean', 'float', 'integer'];

    public  static function setTest($element) : Test 
    {
        $objectClass = new Test();
        $objectClass->startTime = date('Y-m-d H:i:s');
        $objectClass->element = $element;
        $objectClass->focused = $element;
        return $objectClass;
    }

    public function isTrue() : Test
    {
        if($this->focused !== true)
        {
            throw new \Exception('this is not true!');
        }
        $this->report[] = __FUNCTION__;
        return $this;
    }

    public function isFalse() : Test
    {
        if($this->focused !== false)
        {
            throw new \Exception('this is not false!');
        }
        $this->report[] = __FUNCTION__;
        return $this;
    }

    public function isBlank() : Test
    {
        if($this->focused !== '')
        {
            throw new \Exception('this is not blank!');
        }
        $this->report[] = __FUNCTION__;
        return $this;
    }

    public function isNull() : Test 
    {
        if($this->focused !== null)
        {
            throw new \Exception('this is not null!');
        }
        $this->report[] = __FUNCTION__;
        return $this;
    }

    public function is(string $type) : Test
    {
        if(!in_array($type, self::PERMITED_TYPES))
        {
            throw new \Exception("${type} is not permited!");
        }

        if( gettype($this->focused) !== $type)
        {
            throw new \Exception("this is not ${type}!");
        }
        $this->report[] = __FUNCTION__;
        return $this;
    }

    public function equal( $value) : Test
    {

        if($this->focused !== $value)
        {
            throw new \Exception("this is not equal to {$value}!");
        }
        $this->report[] = __FUNCTION__;
        return $this;
    }

    public function instanceOf( $class) : Test
    {
        if(get_class($this->focused) !== $class)
        {
            throw new \Exception("this is not a instance of {$class}!");
        }
        $this->report[] = __FUNCTION__;
        return $this;
    }

    public function hasProperty(string $property) : Test
    {
        $element = (array) $this->focused;
        if(!array_key_exists($property, $element))
        {
            throw new \Exception("this doen't have a property called {$property}!");
        }
        $this->report[] = __FUNCTION__;
        return $this;
    }

    public function focusOnProperty(string $property) : Test
    {
        $this->focused = gettype($this->focused) === 'array' ? $this->focused[$property] : $this->focused->$property;
        $this->report[] = __FUNCTION__;
        return $this;
    }

    public function focusOnOriginal() : Test
    {
        $this->focused = $this->element;
        $this->report[] = __FUNCTION__;
        return $this;
    }

    public function hasMethod(string $function) : Test
    {
        if(!method_exists( $this->focused , $function))
        {
            throw new \Exception("this doen't have a method called {$propefunctionrty}!");
        }
        $this->report[] = __FUNCTION__;
        return $this;
    }

    public function report() : Test
    {
        $this->report[] = __FUNCTION__;
        $this->endTime = date('Y-m-d H:i:s');
        echo "<pre>";
        print_r([
            'startAt' => $this->startTime,
            'endAt' => $this->endTime,
            'report' => $this->report,
        ]);
        echo "</pre>";

        return  $this;
    }
}
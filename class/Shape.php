<?php

abstract class Shape
{
    const UNIT = 'cm';
    protected $name;

    public function __construct($name)
    {
        $this-> name = $name;
    }

    abstract public function perimeter();

    public function displayPerimeter()
    {
        echo "Le " . $this->name . " a un périmétre de " . $this->perimeter() . self::UNIT;
    }

    public function displayArea()
    {
        echo "Le " . $this->name . " a une aire de " . $this->area() . self::UNIT . '2';
    }
    
}


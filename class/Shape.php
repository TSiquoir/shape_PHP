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

    public function displayPerimeter($unit = 'cm')
    {
        if ($unit === 'mm') {
            $perimeter = $this->perimeteToMm();
        } else {
            $perimeter = $this->perimeter();

        }

        echo "Le " . $this->name . " a un périmétre de " . $perimeter . $unit;
    }

    public function displayArea()
    {
        echo "Le " . $this->name . " a une aire de " . $this->area() . self::UNIT . '2';
    }

    public function perimeteToMm()
    {
        return $this->perimeter() * 10;
    }
    
    public function areaToMm()
    {
        return $this->area() * 10;
    }
}


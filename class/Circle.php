<?php

class Circle extends Shape
{
    private $ray;

    public function __construct($ray) 
    {
        $this->ray = $ray;
    }

    public function perimeter()
    {
        return 2 * pi() * $this->ray;
    }

    public function area()
    {
        return $this->ray * $this->ray * pi();
    }
}
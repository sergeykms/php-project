<?php

namespace App\Figures;
class Rectangle extends Figure
{
    private $width;
    private $height;


    public function __construct(int|float $width, int|float $height)
    {
        $this->width = $width;
        $this->height = $height;
    }

    public function square(): int|float
    {
        return $this->height * $this->width;
    }
}
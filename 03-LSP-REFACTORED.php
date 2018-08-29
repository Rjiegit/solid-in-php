<?php

abstract class Shape
{
    abstract public function getArea(): int;
}

class Rectangle extends Shape
{
    private $height;
    private $width;

    public function __construct(int $height, int $width)
    {
        $this->height = $height;
        $this->width = $width;
    }

    public function getArea(): int
    {
        return $this->height * $this->width;
    }

}

class Square extends Shape
{
    private $length;

    public function __construct(int $length)
    {
        $this->length = $length;
    }

    public function getArea(): int
    {
        return $this->length * $this->length;
    }
}

function renderShapes(array $shapes)
{
    foreach ($shapes as $shape) {
        /** @var Shape $shape */
        $area = $shape->getArea();
        print_r($area);
    }
}

$shapes = [
    new Rectangle(4, 6),
    new Square(5)
];

renderShapes($shapes);
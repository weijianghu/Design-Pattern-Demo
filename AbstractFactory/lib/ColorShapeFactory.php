<?php
namespace lib;


abstract class ColorShapeFactory
{
    abstract public function getColor($color);
    abstract public function getShape($shape);
}
<?php
namespace lib;


class ShapeFactory extends ColorShapeFactory
{
    public function getColor($color)
    {
        return ;
    }
    public function getShape($shape)
    {
        if(!$shape){
            return ;
        }
        $file = "lib/".$shape.".php";
        if(!file_exists($file)){
            return ;
        }
        return new $shape();
    }
}
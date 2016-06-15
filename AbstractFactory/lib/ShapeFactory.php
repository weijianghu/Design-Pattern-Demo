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
        $shape = __NAMESPACE__."\\"."$shape";//此处注意在命名空间中，使用动态语言特征，需必须使用完全限定名称（包括命名空间前缀的类名称）
        return new $shape;
    }
}
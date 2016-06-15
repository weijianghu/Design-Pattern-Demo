<?php
namespace lib;
use lib\Blue;
use lib\Red;
use lib\ColorShapeFactory;

class ColorFactory extends ColorShapeFactory
{
    public function getColor($color)
    {
        if(!$color){
            return ;
        }
        $file = "lib/".$color.".php";
        if(!file_exists($file)){
            return ;
        }
        $color = __NAMESPACE__."\\"."$color";//此处注意在命名空间中，使用动态语言特征，需必须使用完全限定名称（包括命名空间前缀的类名称）
        return new $color;
    }
    public function getShape($shape)
    {
        return ;
    }
}
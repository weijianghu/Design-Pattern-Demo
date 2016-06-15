<?php
namespace lib;


class FactoryProducer
{
    public function getFactory($mark){
        if($mark == 'Shape'){
            return new ShapeFactory();
        }elseif($mark == 'Color'){
            return new ColorFactory();
        }else{
            return ;
        }
    }
}
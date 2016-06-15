<?php
/*require("vendor/autoload.php");*/

require "lib/FactoryProducer.php";
use lib\FactoryProducer;

spl_autoload_register(function ($class) {
    if ($class) {
        $class = str_replace('\\', '/', $class);
        if($position = strripos($class,"/")){
            $class = substr($class,$position);
            $class = "lib".$class;
        }else{
            $class = "lib/".$class;
        }
        $class .= ".php";
        if (file_exists($class)) {
            include  $class;
        }
    }else{
        exit("class not found");
    }
});

$factory = new FactoryProducer();
$color = $factory->getFactory('Color');
$a = $color->getColor("Red");
echo $a->color();
<?php
    spl_autoload_register(function ($class) {
        if ($class) {
            $file = str_replace('\\', '/', $class);
            $file .= '.php';
            $file = "lib/".$file;
            if (file_exists($file)) {
                require_once  $file;
            }
        }else{
            exit("class not found");
        }
    });
    $factory = new Factory();

    $car = $factory->init("Bicycle");
    if(!$car){
        exit("class not found");
    }else{
        $car->run();
    }
?>
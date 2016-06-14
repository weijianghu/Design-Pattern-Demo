<?php
class Factory {
    public function init($car){
        if(!$car){
            return ;
        }
        $file = "lib/".$car.".php";
        if(!file_exists($file)){
            return ;
        }
        return new $car();
    }
}

?>
<?php
namespace lib;
use lib\ColorInterface;

class Red implements ColorInterface
{
    public function color(){
        echo "red";
    }
}
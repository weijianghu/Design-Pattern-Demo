<?php
namespace lib;
use lib\ColorInterface;

class Blue implements ColorInterface
{
    public function color(){
        echo "blue";
    }
}
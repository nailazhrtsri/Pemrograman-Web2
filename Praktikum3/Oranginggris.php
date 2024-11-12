<?php

require_once "Oranf.php";

class OrangInggris extends Orang{

    //override
    public function ucapSalam(){
        echo "Halo my name is " . $this->nama . "<br>";
    }
    
}
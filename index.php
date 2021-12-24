<?php 

class Car {
    public $name;
    public $prize;
    public $incentivo;
    public $isElectric;

    function __construct($name, $prize, $incentivo = 0, $isElectric = false){
        $this->name = $name;
        $this->prize = $prize;
        $this->incentivo = $incentivo;
        $this->isElectric = $isElectric;
    }
} 

?>
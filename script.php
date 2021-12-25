<?php 

class Car {
    public $name;
    public $prize;
    public $incentivo;
    public $isElectric;
    //public $isElectric;

    function __construct($name, $prize, $incentivo = 0, $isElectric = false){
        $this->name = $name;
        $this->prize = $prize;
        $this->incentivo = $incentivo;
        //$this->isElectric = $isElectric;
    }

    public function getIncentivo($isElectric) {
        if(isElectric == true) {
           $result = substr($this->prize - $this->incentivo);
           return $result
        }
    }
} 

//Car 1
$car1 = new Car('fiat 500', '10.000$', '0', 'false');
var_dump($car);

echo '<p>' .$car->getIncentivo() . '..</p>';

echo '<hr>';

//Car 2
$car2 = new Car('Tesla model S', '105.970', '30.000', 'true');
var_dump($car);

echo '<p>' .$car->getIncentivo() . '..</p>';

echo '<hr>';

?>
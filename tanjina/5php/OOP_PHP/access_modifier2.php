<?php

namespace oop_php;

class Fruit
{
    public $name;
    public $color;

    public function __construct($name, $color) {
        $this->name = $name;
        $this->color = $color;
    }
    
    public function intro1() {
        echo "The fruit is {$this->name}";
    }

    // protected function intro2() {
    //     echo "The fruit is {$this->name} and the color is {$this->color}.";
    // }
}


class Strawberry extends Fruit
{
    public $weight;
    
    public function __construct($name, $color, $weight) {
        $this->name = $name;
        $this->color = $color;
        $this->weight = $weight;
    }

    public function intro3() {
        echo "The fruit is {$this->name}, the color is {$this->color}, and the weight is {$this->weight} gram.";
    }
}


$strawberry = new Strawberry("Strawberry", "Red", 50);
$strawberry->intro1();
echo "<br>";
$strawberry->intro3();
echo "<br>";
$strawberry->intro2();
?>
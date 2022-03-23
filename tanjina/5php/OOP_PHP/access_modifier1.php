<?php
// class Fruit1 {
//     public $name;
//     protected $color;
//     private $weight;
// }

// $mango = new Fruit1();
// $mango->name = 'Mango'; // OK
// $mango->color = 'Yellow'; // ERROR
// $mango->weight = '300'; // ERROR



class Fruit2 {
    public $name;
    public $color;
    public $weight;
    
    public function set_name($name) { // a public function (default)
        $this->name = $name;
    }

    public function get_name() {
        return $this->name;
    }

    protected function set_color($color) { // a protected function
        $this->color = $color;
    }
    private function set_weight($weight) { // a private function
        $this->weight = $weight;
    }
}

$mango = new Fruit2();
$mango->set_name('Mango'); // OK
$mango->get_name(); // OK

// $mango->set_color('Yellow'); // ERROR
// $mango->set_weight('300'); // ERROR


?>
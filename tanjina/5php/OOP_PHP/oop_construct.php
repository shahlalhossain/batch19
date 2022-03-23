<?php
class Fruit {
    public $name;
    public $color;
    public $size;
    
    function __construct($name, $color, $size) {
        $this->name = $name;
        $this->color = $color;
        $this->size = $size;
    }

    function get_name() {
        return $this->name;
    }

    function get_color() {
        return $this->color;
    }

    function get_size() {
        return $this->size;
    }
}
$apple = new Fruit("Apple", "Red", "Medium");
echo $apple->get_name();
echo "<br>";
echo $apple->get_color();
echo "<br>";
echo $apple->get_size();
?>
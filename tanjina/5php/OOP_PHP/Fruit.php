<?php
/**
 * Created by PhpStorm.
 * User: shahlal
 * Date: 8/22/21
 * Time: 9:07 PM
 */

class Fruit
{
    //Member Variables/Properties
    public $name;
    public $colour;
    public $size;

    //Member Functions/Methods
    public function setName($name, $colour) {
        $this->name = $name;
        $this->colour = $colour;
    }

    public function getName() {
        return $this->name;
    }

    public function getColour() {
        return $this->colour;
    }
}

$apple = new Fruit();
$apple->setName('Apple', 'Red');
echo $apple->getName();
echo "<br>";
echo $apple->getColour();

echo "<br>";

$banana = new Fruit();
$banana->setName('Banana','Yellow');
echo $banana->getName();

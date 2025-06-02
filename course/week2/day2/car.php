<?php

class Fruit {
    public $name;
    public $color;

    public function __construct($name, $color) {
        $this->name = $name;
        $this->color = $color;
    }

    protected function intro() {
        return "The fruit is {$this->name} and the color is {$this->color}.";
    }
}

class Strawberry extends Fruit {
    public function message() {
            return "Am I a fruit or a berry?<br>" . $this->intro();
    }
}

$strawberry = new Strawberry("Strawberry", "green");
echo $strawberry->message();


?>
<?php

class F1 {
    public $team;
    public $car;

    public function teamInfo() {
        echo "This is a $this->team team, they use a $this->car";
    }
}

$mercedes = new F1;
$mercedes->team = "Mercedes";
$mercedes->car = "W16";
echo $mercedes->teaminfo();

echo "<br>";

$ferrari = new F1;
$ferrari->team = "Ferrari";
$ferrari->car = "SF25";
echo $ferrari->teamInfo();
?>
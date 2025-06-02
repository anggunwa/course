<?php

class Book {
    public $title;
    public $author;
    public $year;

    public function getSummary() {
        echo "The book '$this->title' was written by $this->author in $this->year.";
    }

    public function isClassic() {
        return $this->year < 2000;
    }
}

$naruto = new Book();
$naruto->title = "Naruto";
$naruto->author = "Mashashi Kishimoto";
$naruto->year = "1999";
echo $naruto->getSummary();
echo "<br>";
    if ($naruto->isClassic()) {
        echo "Yes, it was published after 2000.<br>";
    } else {
        echo "No, it was published before 2000.<br>";
    }
echo "<br>";

$onePiece = new Book();
$onePiece->title = "One Piece";
$onePiece->author = "Eiichiro Oda";
$onePiece->year = "1999";
echo $onePiece->getSummary();
echo "<br>";
    if ($onePiece->isClassic()) {
        echo "Yes, it was published after 2000.<br>";
    } else {
        echo "No, it was published before 2000.<br>";
    }

?>
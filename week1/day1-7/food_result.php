<?php

if (!empty($_POST["foods"])) {
    $foods = $_POST["foods"];
    echo "Makanan favoritmu adalah:<br>";
    echo "<ul>";
    foreach ($foods as $food) {
        echo "<li>". htmlspecialchars($food) ."</li><br>";
    }
    echo "</ul>";
} else {
    echo "Pilih salah satu makanan!";
}

?>
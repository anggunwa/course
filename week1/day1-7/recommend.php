<?php

    $hobbySuggestions = [
        "Bosan"=> ["Menggambar", "Membaca", "Bermain gitar"],
        "Stress"=> ["Meditasi", "Merangkum", "Jalan-jalan"],
        "Gaul"=> ["Berlari", "Berdansa", "Berdangdut"]
    ];

    $mood = $_POST["mood"] ?? "";
    if ($mood && isset($hobbySuggestions[$mood])) {
        echo "<h3>Hobi yang sesuai mood kamu adalah:</h3><ul>";
        foreach ($hobbySuggestions[$mood] as $hobby) {
            echo "<li>$hobby</li>";
        }
        echo "</ul>";
    } else {
        echo "Pilih salah satu hobi terlebih dahulu.";
    }

?>
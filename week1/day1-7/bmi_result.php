<?php

if (isset($_POST["berat"]) && isset($_POST["tinggi"]) !== "") {
    $jenis_kelamin = $_POST["jenis_kelamin"];
    $berat = (float) $_POST["berat"];
    $tinggi = (float) $_POST["tinggi"];
        if ($tinggi > 3) {
        $tinggi = $tinggi / 100; 
    } 
    echo "Jenis kelamin anda: $jenis_kelamin<br>";
    echo "Berat badan anda: $berat<br>";
    echo "Tinggi badan anda: $tinggi<br>";

    $bmi = round($berat / ($tinggi * $tinggi), 2);
    echo "BMI anda adalah $bmi";
} else {
    echo "Tolong isi form terlebih dahulu";
}

?>
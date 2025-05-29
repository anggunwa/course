<?php

$hobbies = ["Reading", "Gaming", "Cooking"];

foreach ($hobbies as $hobby) {
    switch ($hobby) {
        case "Reading":
            echo "1. $hobby - A calm hobby<br>";
            break;
        case "Gaming":
            echo "2. $hobby - A thrilling one!<br>";
            break;
        case "Cooking":
            echo "3. $hobby - A tasty skill<br>";
            break;
        default:
            echo "$hobby is fun.<br>";
    }
}

?>
<?php

if (!empty($_POST["hobbies"])) {
    $hobbies = $_POST["hobbies"];

    echo "Hobimu adalah:<br>";
    foreach ($hobbies as $hobby) {
        echo "- " . htmlspecialchars($hobby) . "<br";
    }
} else {
    echo "No hobbies selected";
}

?>
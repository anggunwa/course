<?php

if (isset($_POST["age"]) && isset($_POST["email"])) {
    $age = trim($_POST["age"]);
    $email = trim($_POST["email"]);

    if (!is_numeric($age) || $age < 1) {
        echo "<p>Age must be a number or can't be less than 0</p>";   
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<p>Email can't be empty and use a valid format.</p>";
    } else {
        echo "<p>Your age is ".htmlspecialchars($age)." and your email is ".htmlspecialchars($email)."</p>";
    }

}

    

?>
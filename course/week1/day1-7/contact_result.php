<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = trim($_POST["name"]);
    $email = trim($_POST["email"]);
    $subject = trim($_POST["subject"]);
    $message = trim($_POST["message"]);

    $errors = [];

    if ($name === "") {
        $errors[] = "Name is required.";
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Please enter a valid email.";
    }
    if ($message === "") {
        $errors[] = "The message can't be empty";
    }

    if (count($errors) > 0) {
        echo "<h3> There were errors in your input:</h3><ul>";
        foreach ($errors as $error) {
            echo "<li>".htmlspecialchars($error)."</li>";
        }
        echo "</ul>";
    } else {
        echo "<h3>Thank you, ".htmlspecialchars($name)."</h3>";
        echo "<p>Your message has been receieved.</p>";
        echo "<strong>Subject: </strong>".htmlspecialchars($subject)."<br>";
        echo "<strong>Email: </strong>".htmlspecialchars($email)."<br>";
        echo "<strong>Message: </strong><br><pre>".htmlspecialchars($message)."</pre>";
    }

}

?>
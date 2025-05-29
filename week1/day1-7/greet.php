<?php

if (isset($_GET["username"]) && trim($_GET["username"]) !== "") {
    $nama = htmlspecialchars($_GET["username"]);
    echo "Hello, $nama!";
} else {
    echo "Please submit the form.";
}

?>
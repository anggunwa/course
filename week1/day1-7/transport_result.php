<?php

if (!empty($_POST["main_transport"] && $_POST["other_transport"])) {
    $main_transport = $_POST["main_transport"];
    $other_transport = $_POST["other_transport"];
    echo "Transportasi utamamu adalah: $main_transport. Opsi lainmu adalah: ";

    foreach ($other_transport as $index => $transport) {
        if ($index == count($other_transport) - 1) {
            echo "$transport.";
        } else {
            echo "$transport, ";
        }    
    }         
} else {
        echo "Pilih terlebih dahulu transportasimu!";
}



?>
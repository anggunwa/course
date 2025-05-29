<?php

function bmi($weight, $height) {
    $formatted_height = sprintf("%.2f", $height);
    return round($weight / ($formatted_height*$formatted_height),2); 
}

echo bmi(70, 1.70);

?>
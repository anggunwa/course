<?php

function calculateTax($price, $rate) {
    return $price + ($price * $rate/100); 
}

echo calculateTax(100, 10);

?>
<?php

function cekBilanganPrima($number){
    // return 1 bahwa bilangan tsb bukan prima
    if($number === 1){
        return false;
    }
    if($number === 2){
        return true;
    }
    $xNumber = sqrt($number);
    $xNumber = floor($xNumber);
    for ($i = 2; $i <= $xNumber; ++$i) { 
        if($number % $i == 0){
            break;
        }
    }
    if ($xNumber == $i-1) {
        return true;
    } else {
        return false;
    }
}
for ($i=1; $i < 50; $i++) { 
    var_dump($i . ': ' . cekBilanganPrima($i));
}
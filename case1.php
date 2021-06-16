<?php
function hilihConverterString($string){
    // change a
    $string = str_replace('o', 'i', str_replace('e', 'i', str_replace('u', 'i', str_replace('a', 'i', $string))));
    return $string;
}
var_dump(hilihConverterString('jika input yang dimasukkan'));
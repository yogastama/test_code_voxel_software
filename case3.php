<?php

function check_palindrome($string){
    // remove all space
    $string = str_replace(' ', '', $string);
    // remove special characters
    $string = preg_replace('/[^A-Za-z0-9\-]/', '', $string);
    // change case to lower
    $string = strtolower($string);
    $reverse_string = strrev($string);
    if ($string == $reverse_string) {
        return true;
    } else {
        return false;
    }
}
check_palindrome('kodok');
check_palindrome('kaca');
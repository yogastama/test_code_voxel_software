<?php

$data = [4, 5, 8, 9, 0, 2, 8, 2, 11, 15, 2, 9, 0];
$data = array_values(array_unique($data));
sort($data);
var_dump($data);
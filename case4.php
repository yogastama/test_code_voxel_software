<?php

$data = [23, 45, 67, 90, 23, 1, 6, 90, 12, 43, 90, 67];
$data = array_values(array_unique($data));
var_dump($data);
<?php

$array = array('apple', 'banana', 'mango', 'papaya', 'mango');

$newArray = array_slice($array, 1, 3);
echo "<br>";
//$newArray = array_slice($array, 1, 3, true);

echo "<pre>";
print_r($newArray);
echo "</pre>";


?>
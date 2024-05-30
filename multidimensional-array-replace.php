<?php

$array1 = array("a" => ("red"), "b" => array("green", "pink"));

$array2 = array("a" => array("yellow"), "b" => array("black"));

$newArray = array_replace_recursive($array1, $array2);

echo "<pre>";
print_r($newArray);
echo "</pre>";

?>
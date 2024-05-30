<?php
$fruits = array('banana', 'papaya', 'mango', 'orange');

$veggie = array('tomato', 'potato');

$newArray = array_replace($fruits, $veggie);

echo "<pre>";
print_r($newArray);
echo "</pre>";


//For Associative Array
$a = array('a' => 'banana', 'b' => 'papaya', 'c' => 'mango', 'd' => 'orange');

$b = array('c' => 'tomato', 'd' => 'potato');

$c = array_replace($a, $b);

echo "<pre>";
print_r($c);
echo "</pre>";

?>
<?php

$fruits = array("banana", "orange", "mango", "papaya", "banana");

// echo sizeof($fruits);
// echo "<br>";
// echo count($fruits);

echo "<pre>";
print_r(array_count_values($fruits));
echo "</pre>";


// For Associative Array
// $food = array(
//     'fruits' => array("banana", "orange", "mango", "papaya"),
//     'veggietables' => array("carrot", "collard", "pea")
// );

// echo count($food, 1);
// echo "<br>";
// echo count($food['fruits'], 1);
// echo "<br>";
// echo count($food['veggietables'], 1);
?>
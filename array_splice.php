<?php

$fruits = ["apple", "mango", "papaya", "pineapple", "watermillon"];

$color = ["red", "black", "blue"];

array_splice($fruits, 1, 3, $color);

echo "<pre>";
print_r($fruits);
echo "</pre>";

?>
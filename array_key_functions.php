<?php
$color = [
    "first" => "red",
    "second" => "black",
    "third" => "blue",
    "fourth" => "green"
];

// $newArray = array_keys($color);
//$newArray = array_key_first($color);
//$newArray = array_key_last($color);
// $newArray = array_key_exists("third", $color);
$newArray = key_exists("third", $color);

echo "<pre>";
print_r($newArray);
echo "</pre>";

?>
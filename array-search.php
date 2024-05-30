<?php

$fruits = array('apple', 'banana', '55', 'papaya', 'mango');

echo in_array('banana', $fruits);// Returns values in True 1 / False 0.
echo "<br>";

echo array_search('mango', $fruits);// Returns values in Index or key.
echo "<br>";

if (in_array(55, $fruits, true)) {
    echo "Find Successfully.";
} else {
    echo "Can't Find.";
}


?>
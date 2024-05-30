<?php

//Associative Array
$a = array(array('p', 'h'), array('p', 'r'), array('d', 'e'));

echo in_array(array('d', 'e'), $a);// Returns values in True 1 / False 0.
echo "<br>";

echo array_search(array('d', 'e'), $a);// Returns values in Index or key.
echo "<br>";

if (in_array(array('p', 'r'), $a, true)) {
    echo "Find Successfully.";
} else {
    echo "Can't Find.";
}


?>
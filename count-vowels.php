<?php

$string = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum veniam deserunt et molestias dicta tenetur ipsam earum ullam vitae. Laboriosam, quaerat nemo adipisci eos iure ex vitae voluptate unde maiores";

$output = [];

$checkArray = ['a', 'e', 'i', 'o', 'u'];

$length = strlen($string);

for ($i = 0; $i < $length; $i++) {

    $character = substr($string, $i, 1);
    if (in_array($character, $checkArray)) {
        if ($output[$character]) {
            $output[$character]++;
        } else {
            $output[$character] = 1;
        }
    }
}
ksort($output);
print_r($output);
?>
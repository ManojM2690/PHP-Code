<?php

$n=1264;
$r;
$sum=0;
$c=$n;
while($n>0){
	
	$r=$n%10;//first find remainder
	$sum=$sum+$r; //perform logic
	$n=$n/10; //find this
	
}
echo "Sum $c is $sum";

?>
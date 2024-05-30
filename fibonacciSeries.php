<?php

$nums=10;
$firstNum=0;
$secondNum=1;
echo "Fibonacci series: ";
for($i=1;$i<=$nums;$i++){
	
	echo "$firstNum, ";
	
	$nextNum=$firstNum+$secondNum;
	$firstNum=$secondNum;
	$secondNum=$nextNum;
}

?>
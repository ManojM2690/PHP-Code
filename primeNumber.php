<?php

$number=11;
$count=0;
for($i=1;$i<=$number;$i++){
	if($number%$i==0){
		$count++;
	}
}
if($count==2){
	echo "$number is prime number.";
}else{
	echo "$number is not prime number.";
}

?>
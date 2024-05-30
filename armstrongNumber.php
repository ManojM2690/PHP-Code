<?php

$n=153;
$r;
$arm=0;
$c=$n;
while($n>0){
	
	$r=$n%10;
	$arm=$arm+($r*$r*$r);
	$n=$n/10;
}

if($c==$arm){
	echo "$c is armstrong number.";
}else{
	echo "$c is not armstrong number.";
}
?>
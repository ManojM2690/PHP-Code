<?php  

$n=121;
$s=0;
$r;
$c=$n;
while($n>0){
	
	 $r=$n%10;
	 $s=($s*10)+$r;
	 $n=(int)($n/10);
}
if($c==$s){
	echo "$c is palindrome number";
}else{
	echo "$c is not palindrome number";
}

?>
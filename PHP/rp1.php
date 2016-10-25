<?php
echo "PR\n\n----------\n" ;
echo "No 1\n----------\n\n" ;
for($a=1;$a<=10;$a++){
	if($a<=5){
		echo $a . "\n";
	}
}
echo "No 2\n----------\n\n" ;
for($a=1;$a<=10;$a++){
	if($a>=6){
		echo $a . "\n";
	}
}
echo "No 3\n----------\n\n" ;
for($a=1;$a<=10;$a++){
	if($a%2==1){
		echo $a . "\n";
	}
}
echo "No 4\n----------\n\n" ;
for($a=1;$a<=10;$a++){
	if($a%2==0){
		echo $a . "\n";
	}
}
echo "No 5\n----------\n\n" ;
for($a=1;$a<=50;$a++){
	if($a%4==0){
		echo $a . "\n";
	}
}
?>
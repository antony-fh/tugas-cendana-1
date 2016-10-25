<?php

// for($a=0;$a<=10;$a++){
	// echo $a . "\n";
// }
// echo "\n";
// for($a=10;$a>=1;$a--){
	// echo $a . "\n";
// }
// for($i=1;$i<=10;$i++){
	// $a= $i%2;
	// if($a==0){
		// echo $i . "- genap\n";
	// }
	// else{
		// echo $i . "- ganjil\n";
		// for($a=0;$a<=2;$a++){
			// echo "ganjil - ". $i."\n";
		// }
		// }
	// }
	$b=10;
	for($i=1;$i<=$b;$i++){
		if($i%2==0 && $i%3==0 ){
			echo $i . "- Ciye Hore\n";
		}
		else if($i%2==0){
			echo $i . " - Ciye\n";
		}
		
		else if($i%3==0){
			echo $i . " - Hore\n";
		}
		else{
			echo $i."\n";
		}
	}
?>
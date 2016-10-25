<?php
$val = 9;
// if($val >= 10){
	// echo "bad";
// }else{
	// echo "good";
// }
// if($val >= 10){
	// echo $val;
// }else if($val>7){
	// echo "good";
// } else {
	// echo "bad";
// }
$val = "Umur saya 24 tahun";
$a = substr($val,10,-5);
if($a%2==0){
	echo $a." adalah angka genap";
}
else{
	echo $a." adalah angka ganjil";
}
?>
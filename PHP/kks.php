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
$val = "Saya punya anjing 1 dan kucing 2";
$a = substr($val,11,-8);
$b =substr($val,-8,8);
$ttl=(substr($val,-14,1)+substr($val,-1));

	echo ucfirst($a).ucfirst($b)." jumlahnya =" . $ttl;

?>
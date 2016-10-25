<?php

$kal= "Budi pergi ke sekolah menggunakan becak";


function ubahkal($kal){
	$arr=explode(" ", $kal);
	for ($i=0; $i <count($arr) ; $i++) { 
		echo ucfirst($arr[$i])." ";
		}
}
ubahkal($kal);
?>
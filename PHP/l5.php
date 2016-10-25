<?php

$kal= "24 budi 1990 malang 25";


function ubahkal($kal){
	$arr=explode(" ", $kal);
	foreach ($arr as $key) {
    if (is_numeric($key)) {
        if (strlen($key)==4) {
        	echo "Tahun = ".$key."<br>";
        }
        if(strlen($key)==2){
        	echo "Umur = ".$key."<br>";
        }
    } 
}
}
ubahkal ($kal);
?>
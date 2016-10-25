<?php

$kal= "Budi pergi ke sekolah pukul 14";


function ubahkal($kal){
	$arr=explode(" ", $kal);
	foreach ($arr as $key) {
    if (is_numeric($key)) {
        echo $key." - angka<br/>";
    } else {
        echo $key." - bukan angka<br/>";
    }
}
}
?>
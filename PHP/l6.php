<?php

$kal= "24 budi 1990 malang";

function ubahkal($kal){
$s=0;
	$arr=explode(" ", $kal);
// 	foreach ($arr as $key) {
//     if (is_numeric($key)) {
//         echo "<pre>";
//         echo array_sum($key);
//     }
// }
    echo array_sum($arr);
}
ubahkal ($kal);
?>
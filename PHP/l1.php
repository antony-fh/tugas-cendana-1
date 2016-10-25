<?php
// $n1=10;
// $n2=10;
// function tambah($ni1,$ni2){
// 	$hsl=$ni1+$ni2;
// 	return $hsl;
// }
// function bagi ($hsl_bagi){
// 	$hsl_bagi=$hsl_bagi /2;
// 	return $hsl_bagi;
// }
// function kali($hsl_bagi){
// 	$hsl_kali=$hsl_bagi *2;
// 	return $hsl_kali;
// }
// function tampil($hasil_kali){
// 	echo $hasil_kali;
// }

// $hsl_bagi1=tambah($n1,$n2);
// $hsl_kali1=bagi($hsl_bagi1);
// $hsl_akh=kali($hsl_kali1);
//  echo $hsl_akh;
//  tampil($hsl_akh);
$kal= "Budi pergi ke sekolah menggunakan becak";
function pecah_str($kal){
	$arr=explode(" ", $kal);
	return $arr;
}
function tampil($arr){
	echo"<pre>";
	print_r($arr);
	echo"</pre>";
}
$a=pecah_str($kal);
tampil($a);
?>
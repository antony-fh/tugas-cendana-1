<?php
$iv = $_POST;
$temp = 0;
for ($i=0; $i <count($iv['angka']) ; $i++) { 
	$temp += $iv['angka'][$i];
}
$hasil = $temp / count($iv['angka']);


$hasil2 = array_sum($iv['angka'])/count($iv['angka']);
echo "rata :" . $hasil;
echo "<pre>";
echo "Rata -  rata nilai keseluruhan adalah : ". $hasil2;
echo "</pre>";
?>
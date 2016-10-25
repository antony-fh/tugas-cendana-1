<?php
	
	$s = "Tony makan tempe";
	// saya ingin tempe tersebut menjadi tempe tahu.
	// buat function untuk mengubah tempe menjadi tempe tahu
	// function ubahtempe($s)
	// {
	// 	$out = $s . ' tahu';
	// 	return $out;
	// }
	// $hasil = ubahtempe($s);
	// echo $hasil;
	$n1=10;
	function kali($kali){
		$tampilan = $kali*2;
		return $tampilan;
	}
	function tampilkan($hasil_akhir)
	{
		echo "Hasil akhir adalah = " . $hasil_akhir;
	}
	$hsl = kali($n1);
	echo "nilai dari function kali = ". $hsl . "<br/>";
	tampilkan($hsl);
?>
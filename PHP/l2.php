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
 $arr = [
	  	[
	  		'siswa' => [
	  			'Budi',
	  			'Andi',
	  			'Jono',
	  		],
	  		'nilai' => [
	  			60,
	  			70,
	  			75
	  		]
	  	],
	  	[
	  		'alamat_sekolah' 	=> 'Jl. Sukoharjo 10 Malang',
	  		'no_telp' 			=> '0341-455886'
	  	]
	  ];
function pecah_siswa($kal){
	$arr=array_slice($kal,0,1);

	return $arr;
}
function pecah_sekolah($kal){
	$arr=array_slice($kal,1);
	return $arr;
}
function tampil($arr){
	echo"<pre>";
	print_r($arr);
	echo"</pre>";
}
function tampilkan($siswa, $sekolah) {
	$no = 1;
	foreach ($siswa[0]['siswa'] as $key => $value) {
		echo "<br>";
		echo $no .". " .$value ." - " .$siswa[0]['nilai'][$key];
		$no++;
	}
	$no = 1;
	echo "<br>";
	foreach ($sekolah[0] as $key2 => $value2) {
		echo "<br>";
		echo $no .". " .$key2 ." - " .$value2;
		$no++;
	}
}
$s = [];
$a=pecah_siswa($arr);
$b=pecah_sekolah($arr);
tampil($a);
tampil($b);
tampilkan($a, $b);
echo $s;

?>
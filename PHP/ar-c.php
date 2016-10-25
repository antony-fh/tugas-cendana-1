<?php
// $a = [
// 	'kelas' => ['A','B','C'],
// 	'nilai' => [1, 2, 3, 4, 5, 6],
// 	'nama' => ['Joko', 'Budi', 'Yuni']
// ]; 
// foreach ($a["nilai"] as $key => $value) {
// 	echo $value;
// }
// $a=[
// 	'nama' 	=> ['Thoni','Andik', 'Wawan'],
// 	'nun' 	=> [30,28.5,27],
// 	'kelas'	=> ['A','B','C'],
// 	'keterangan'	=> "Semua siswa dinyatakan lolos"
// ];
// $i=1, $j=1;
// echo "SMK NEGERI XXX Malang memiliki siswa sebagai berikut :\n";
// foreach ($a['nama'] as $key => $value) {
// 		echo $i . ". " . $value . "\n";
// 		$i++;
// 	}
// echo "\n masing masing mendapatkan nilai UN sebagai berikut :\n";

// 	foreach ($a['nun'] as $key => $value) {
// 		echo $j . ". " . $value . "\n ";
// 		$j++;
// 	}
// echo "\nDengan demikian dapat disimpulkan bahwa ".$a['keterangan'];
$a=[
	'nama' 	=> ['Thoni','Andik', 'Wawan'],
	'nun' 	=> [30,28.5,27],
	'kelas'	=> ['A','B','C'],
	'keterangan'	=> "Semua siswa dinyatakan lolos"
];
echo "SMK NEGERI XXX Malang memiliki siswa sebagai berikut :\n";
$i=1;
$ss = count($a);
for ($j=0; $j < $ss ; $j++) { 
	foreach ($a as $key => $value) {
		if ($key==3) {
			echo "";
		}else{
		echo $key . " : " . $a[$key][$j] . "\n";
	}
	}
	

}
// foreach ($a as $key => $value) {
// 		echo $key;
// 	}
// foreach ($a[$j] as $key => $value) {
// 		echo $i." " .$key. " :".$value . "\n";
// 		echo $key." :".$a['kelas'][$key]."\n";
// 		echo $key." :".$a['nun'][$key]."\n";

// 		$i++;
// 	}
// $n1=1;
// $ss = count($a['nama']);
// 	for ($i=0; $i < $ss; $i++) { 
// 		echo $n1 . "Nama :".$a['nama'][$i] . "\n";
// 		echo "Kelas :".$a['kelas'][$i]."\n";
// 		echo "Nilai :".$a['nun'][$i]."\n";
// 		$n1++;
// 	}
	

echo "\nDengan demikian dapat disimpulkan bahwa ".$a['keterangan'];
?>
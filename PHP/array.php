<?php
// $a = array();
// $s = [
	// 'buku 1',
	// 'buku 2',
	// 'buku 3',
	// 'buku 4',
	// 'buku 5',
// ];
// echo count($s)."\n";
// for($i=0;$i<count($s);$i++){
// echo $s[$i]. "\n" ;
// }
// $s = [
	// 'buku 1',
	// 'buku 2',
	// 'buku 3',
	// 'buku 4',
	// 'buku 5',
// ];
// for($i=0;$i<count($s);$i++){
	// if($i>&&$i<count($s)-1){
		// echo $s[$i]."\n";
	// }
// }
// $a=[
	// "Thoni",
	// "Budi",
	// "Anto",
	// "Joko",
	// "Andik"
// ];
// $s = [
	// 'Piring',
	// 'Gelas',
	// 'Sendok'
// ];
// echo $a[0]." membawa ".$s[0]." dan ".$s[1].", sedangkan ".$a[3]." membawa ".$s[2]." bersama ".$a[1].", ".$a[2].", ".$a[4].".";
// $e = [
	// ['A1','B1','C1'],
	// ['A2','B2','C2'],
	// ['A3','B3','C3'],
// ]
//versi lama
// $a = array(
	// array('A1','B1','C1'),
	// array('A2','B2','C2'),
	// array('A3','B3','C3'),
// );
$isian = array(
	array('A1','B1','C1'),
	array('A2','B2','C2','D2'),
	array('A3','B3','C3','D3','E3'),
);
$baris=count($isian);
for($i=0;$i<$baris;$i++){
	$kolom=count($isian[$i]);
	echo "Baris = ". $i . "\n";
	for($j=0;$j<$kolom;$j++){
		echo "Kolom = ". $isian[$i][$j]."\n";
	}
}
?>
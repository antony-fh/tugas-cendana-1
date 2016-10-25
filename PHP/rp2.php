<?php
$a = [
	['A','B','C'],
	[1, 2, 3, 4, 5, 6],
	['Joko', 'Budi', 'Yuni']
]; 
$a9 = $a[1][3]+$a[1][4];
$a11 = $a[1][4]+$a[1][5];
echo $a[2][0] . " mempunyai anak sebanyak " . $a[1][3] . " orang sekelas dengan anaknya " . $a[2][2] . " yaitu di kelas " . $a[0][0] . ", mereka menambahkan angka " . $a[1][1] . "," .$a[1][2] . " dan " . $a[1][3] . " menjadi " . $a9 . ". " . $a[2][1] . " menjumlahkan angka " . $a[1][4] . " dan " . $a[1][5] . " menjadi " . $a11 . ". ";
?>
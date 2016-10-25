<?php
$h = 'localhost';
$u = 'root';
$p = '';
$cib=mysql_connect($h,$u,$p);
mysql_select_db('cendana');
$sql = 'select * from pegawai';
$result = mysql_query($sql);
while ($d = mysql_fetch_array($result)) {
	echo $d['nama'];
	echo "<br>";
}
?>
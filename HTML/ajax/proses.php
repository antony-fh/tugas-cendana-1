<?php
$conn=mysql_connect('localhost','root','');
mysql_select_db('cendana',$conn);
$nama = $_POST['nama'];
$telepon = $_POST['telepon'];

mysql_query("insert into pegawai(nama,telepon) values('{$nama}','{$telepon}')");
?>
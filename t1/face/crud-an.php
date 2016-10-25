<?php
include '../reso/config.php';
include 'int.php';
use crud\crudan as kontrol;
use koneksi\con as konek;
class an implements kontrol
{
	public $con;
	public function __construct()
	{
		$this->sql = "";
		$koneksi = new konek;
		$this->con = $koneksi->conn();
		
	}
	public function masuk_an($tbl,$dat,$id)
	{
	$res = mysql_query("select * from {$tbl}",$this->con);
	for ($i=1; $i <=count($dat); $i++) { 
	if($id == mysql_field_name($res,$i)){
		$que1="insert into {$tbl}({$keys}) VALUES('',{$val})";
	}
	else if($id != mysql_field_name($res,$i)){
		$que1="insert into {$tbl}({$keys}) VALUES({$val})";
	}
	$res1[]="'".mysql_field_name($res,$i)."'";
	}
	$val = "'".implode("','",$dat)."'";	
	$keys = implode(",", $res1);
	$que = $que1;
	echo "{$que}";
	}
	public function tampil_an()
	{
		
	}
	public function ubah_an()
	{
		
	}
	public function hapus_an()
	{
		
	}
	
}

$A = new an();
$A->masuk_an('siswa','a','a');
?>
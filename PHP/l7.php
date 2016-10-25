<?php


class mahasiswa
{
	function demo(){
		return "demo";
	}
	function kuliah()
	{
		return "kuliah";
	}
	function gabungAktivitas()
	{
		return " sedang ". $this->demo() . " dan " . $this->kuliah();
	}
	function tampil($mh){
		echo $mh . $this->gabungAktivitas();
	}
}
$mh = new mahasiswa();
$mh->tampil('Hani');
?>
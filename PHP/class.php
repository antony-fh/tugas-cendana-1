<?php


class Hewan
{
	function __construct(){
		echo "omo";
	}
	function makan($ap = '')
	{
		return " Sedang Makan " . $ap;
	}
	function tampil($hewan){
		echo($hewan . $this->makan());
	}
}
$hewan = new Hewan();
$hewan->tampil('Bebek');
?>
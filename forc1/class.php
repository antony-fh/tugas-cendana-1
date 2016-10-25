
<?php


class Hewan
{
	
	function makan()
	{
		return "Sedang Makan";
	}
	function tampil(){
		echo($hewan . $this->makan());
	}
}
$hewan = new Hewan();
$hewan->tampil('Bebek');
?>
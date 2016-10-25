<?php
/*
Ada 3 club sepakbola, masing2 memiliki yel2 yang berbeda :
		- Arema
			"salam satu jiwa"
		- Persebaya
			"bondo nekat"
		- Persija
			"Jakmania"
		buat sebuah class yang mengidentifikasi secara otomatis yel-yel tersebut berasal dari team yang bersangkutan. Terserah menggunakan extends atau implements. 


*/
interface FC{
	public function yelyel();
	// public function tl();
}
class maniak
{
	public function detek(FC $ttl)
	{	
		$ttl->yelyel();
	}		

}
class Arema implements FC
{
	// public function __construct()
	// {
	// 	$yel ="Salam Satu Jiwa"
	// 	$this->yel = "Salam Satu Jiwa";
	// }


	public function yelyel()
	{
		echo "Salam Satu Jiwa";
	}
	
}

class Persebaya implements FC
{
	// public function __construct()
	// {
	// 	$this->yel = "Bondo Nekat";
	// }

	public function yelyel()
	{
		echo "Bondo Nekat";
	}
	
}

class Persija implements FC
{
	// public function __construct()
	// {
	// 	$this->yel = "Jakmania";
	// }

	public function yelyel()
	{
		echo "Jakmania";
	}
	
}
$fc = new maniak();
$ar =new Arema();
$pb =new Persebaya();
$pj =new Persija();
$fc->detek($ar);

?>
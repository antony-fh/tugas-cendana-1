<?php
/*	  	buat class Nilai() yang memiliki function :
	  	- rekap()
	  		mengubah kalimat menjadi array
	  	- rataRata()
	  		menghitung rata-rata array yang sudah direkap
	  	- tampil()
	  		menampilkan hasil rata-rata

	  	output : 

	  	$kalimat = 'Andi 10 budi 23 jono 31';
	  	rekap() --> [
	  		'andi' => 10,
	  		'budi' => 23,
	  		'jono' => 31,
	  	] 

	  	rataRata() --> dirata2 nilainya

	  	tampil() --> hasil rata2*/
$kalimat = 'Andi 10 budi 23 jono 31';

/*class nilai
{
	var $rekap=[];
	var $rataRata=0;

	function rekap($kal){
		$kal1=explode(' ', $kal);
		// $kal2=[];
		for ($i=0; $i <count($kal1) ; $i++) { 
			$a="";
			if(is_numeric($kal1[$i])){
				$a=$kal1[$i];	
			}
			else{
				$b=$kal1[$i];
			}
			$this->rekap[$b] = $a;
		}
	}
	function rataRata()
	{
		// $kal3=array_sum($this->rekap($kal2))/count($this->rekap($kal2));
		$this->rataRata=array_sum($this->rekap) / count($this->rekap);
	}
	function tampil()
	{
		echo 'Hasil rata - ratanya : '.$this->rataRata;
	}
	
}*/
class nilai
{
	function rekap($kal){
		$kal1=explode(' ', $kal);
		$kal2=[];
		for ($i=0; $i <count($kal1) ; $i++) { 
			$a="";
			if(is_numeric($kal1[$i])){
				$a=$kal1[$i];	
			}
			else{
				$b=$kal1[$i];
			}
			$kal2[$b] = $a;
		}
		$kal=$this->rataRata($kal2);
		return $kal;
	}
	function rataRata($kal2)
	{
		$kal3=array_sum($kal2)/count($kal2);
		return $kal3;
	}
	function tampil($kal3)
	{
		echo 'Hasil rata - ratanya : '.$this->rekap($kal3);
	}
	
}
$mh = new nilai();
// $mh ->rekap($kalimat);
$mh ->tampil($kalimat);
?>
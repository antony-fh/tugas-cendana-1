<?php
$partai = [
	  		'pdi' => 0,
	  		'pkb' => 0,
	  		'ppp' => 0,
	  		'hanura' => 0,
	  		'golkar' => 0,
	  	];
class partai
{
	public function voting(){
		global $partai;
		do{

		echo "List partai :\n
		1. pdi\n
		2. pkb\n
		3. ppp\n
		4. hanura\n
		5. golkar\n
		\n\nPilih partai :";
		$handle = fopen ("php://stdin","r");
		$line = fgets($handle);
		if(trim($line) == '1'){
			$partai['pdi'] += 1;
		}
		elseif(trim($line) == '2'){
			$partai['pkb']+=1;
		}
		elseif(trim($line) == '3'){
			$partai['ppp']+=1;
		}
		elseif(trim($line) == '4'){
			$partai['hanura']+=1;
		}
		elseif(trim($line) == '5'){
			$partai['golkar']+=1;
		}
		// $partai[$vote] += 1;
		$this->hasil();
		echo "Lanjut? (y/n) : ";
		$line = fgets($handle);
		if (trim($line) =='y') {
			$pil='y';
			ncurses_clear();
		}
		else{
			exit();
		}
		}while ($pil=='y');			
	}
	function hasil()
	{
		global $partai;
		print_r($partai);
	}
}
$mh = new partai();
$mh ->voting();

?>
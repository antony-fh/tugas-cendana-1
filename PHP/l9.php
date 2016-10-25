<?php
/*$partai = [
	  		'pdi' => 0,
	  		'pkb' => 0,
	  		'ppp' => 0,
	  		'hanura' => 0,
	  		'golkar' => 0,
	  	];
class partai
{
	public function voting($vote){
		global $partai;
		$partai[$vote] += 1;
		$this->hasil();
	}
	function hasil()
	{
		global $partai;
		print_r($partai);
	}
}*/
/*$partai = [
	  		'pdi' => 0,
	  		'pkb' => 0,
	  		'ppp' => 0,
	  		'hanura' => 0,
	  		'golkar' => 0,
	  	];
class partai
{
	public function voting($vote){
		global $partai;
		$partai[$vote] += 1;
		$this->hasil();
	}
	function hasil()
	{
		global $partai;
		print_r($partai);
	}
}
$mh = new partai();
$mh ->voting('pdi');*/
$name = trim(shell_exec("read -p 'Enter your name: ' name\necho \$name"));
echo "Hello $name this is PHP speaking\n";
exit;
?>
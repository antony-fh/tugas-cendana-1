<?php namespace ns2;
use Sc\medsos as Social;
class Googleplus implements Social
{
	public function __construct()
	{
		$this->plus = 0;
	}
	public function like()
	{
		$this->plus++;
	}

	public function total()
	{

		echo "Total Plus G+ : " . $this->plus . " \n";
	}
	public function tl()
	{
		return $this->plus;
	}
	
}

?>
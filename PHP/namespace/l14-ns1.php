<?php namespace ns1;
use Sc\medsos as sosial;
class Twitter implements sosial
{
	public function __construct()
	{
		$this->fav = 0;
	}
	public function like()
	{
		$this->fav++;
	}

	public function total()
	{
		echo "Total Favorit Twitter : " . $this->fav . " \n";
	}
	public function tl()
	{
		return $this->fav;
	}

	
}

?>
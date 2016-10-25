<?php namespace ns;
include 'l14-is.php';
use Sc\medsos as Social;

class Facebook implements Social
{
	public function __construct()
	{
		$this->like = 0;
	}
	public function like()
	{
		$this->like++;
	}

	public function total()
	{
		echo "Total Like Facebook : " . $this->like . " \n";
	}
	public function tl()
	{
		return $this->like;
	}

	
}
/*class Twitter implements Social
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
	
}*/
?>
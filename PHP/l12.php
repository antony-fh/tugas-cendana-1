<?php
/*
Buat class untuk membandingkan like dari beberapa media sosial diantaranya facebook, twitter, dan googleplus. perbandingan tersebut akan memunculkan media sosial akun mana yang paling populer. Buat menggunakan interface dan class.

*/
interface Social{
	public function like();
	public function total();
	public function tl();
}
class banding
{
	public function tampil(Social $ttl)
	{
		$ttl->total();		
	}
	public function bandingkan(Social $t1, Social $t2, Social $t3)
	{
		// $t1->tl();
		// $t2->tl();
		// $t3->tl();
		if($t1->tl() > $t2->tl() && $t1->tl() > $t3->tl()){
			echo "Facebook lebih populer dibandingkan dua lainnya";
		}
		if($t2->tl() > $t1->tl() && $t2->tl() > $t3->tl()){
			echo "Twitter lebih populer dibandingkan dua lainnya";
		}
		if($t3->tl() > $t2->tl() && $t3->tl() > $t1->tl()){
			echo "Googleplus lebih populer dibandingkan dua lainnya";
		}

	}

}
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
class Twitter implements Social
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
	
}

$fb = new Facebook();
$twit = new Twitter();
$Gplus = new Googleplus();
$fb->like();
$fb->like();
$fb->like();
$twit->like();
$twit->like();
$Gplus->like();
$Gplus->like();
$Gplus->like();
$Gplus->like();
$bd = new banding();
$bd->tampil($fb);
$bd->tampil($twit);
$bd->tampil($Gplus);
$bd->bandingkan($fb, $twit, $Gplus);
?>
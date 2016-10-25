<?php namespace banding;

use ns\Facebook as fb;
use ns1\Twitter as twit;
use ns2\Googleplus as gplus;
use Sc\medsos as Social;
class banding
{
	public function tampil(Social $ttl)
	{
		$ttl->total();		
	}
	public function bandingkan(fb $t1, twit $t2, gplus $t3)
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
?>
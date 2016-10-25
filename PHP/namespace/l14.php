<?php 
include('l14-s.php');
include('l14-ns.php');
include('l14-ns1.php');
include('l14-ns2.php');
$fb = new ns\Facebook();
$twit = new ns1\Twitter();
$Gplus = new ns2\Googleplus();
$fb->like();
$fb->like();
$fb->like();
$twit->like();
$twit->like();
$twit->like();
$Gplus->like();
$Gplus->like();
$Gplus->like();
$Gplus->like();
$bd = new banding\banding();
$bd->tampil($fb);
$bd->tampil($twit);
$bd->tampil($Gplus);
$bd->bandingkan($fb, $twit, $Gplus);
?>
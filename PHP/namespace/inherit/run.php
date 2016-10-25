<?php
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
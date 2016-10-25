<?php

	$conn=mysql_connect("localhost", "root","");
	mysql_select_db('cendana',$conn);
if($_SESSION['user']==""){
    header("Location:login.php");
}
?>
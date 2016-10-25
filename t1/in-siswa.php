<?php
// include('reso/config.php');
function ins($tbl,$dat,$id){
$h = "localhost";
$u = "root";
$p = "";
$db ="db_siswa";
$conn = mysql_connect($h, $u, $p);
mysql_select_db($db);
	$res1=[];
	$res = mysql_query("select * from {$tbl}",$conn);
	for ($i=1; $i <=count($dat); $i++) { 
	// if($id == mysql_field_name($res,$i)){
	// 	$que1="insert into {$tbl}({$keys}) VALUES('',{$val})";
	// }
	// else if($id != mysql_field_name($res,$i)){
	// 	$que1="insert into {$tbl}({$keys}) VALUES({$val})";
	// }
	$res1[]="'".mysql_field_name($res,$i)."'";
	}
	$val = "'".implode("','",$dat)."'";
	$keys = implode(",", $res1);
	$que = "insert into {$tbl}({$keys}) VALUES('',{$val})";
	echo "{$que}";
}
?>
<form action="" method="post">
	<input type="text" name="siswa[]" value="">
	<input type="text" name="siswa[]" value="">
	<input type="text" name="siswa[]" value="">
	<input type="submit" name="sm" value="aaa">
</form>
<?php
	if (isset($_POST['sm'])) {
		$iv=$_POST['siswa'];
		ins('siswa',$iv,'id_siswa');
	}
?>
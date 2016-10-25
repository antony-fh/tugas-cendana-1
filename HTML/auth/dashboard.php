<?php session_start(); ?>
<?php if(isset($_SESSION['user'])){?>
<h1>Selamat Datang</h1>
<a href="logout.php">Logout</a>
<?php
}else{
?>
maaf dilarang masuk <a href="login.php">Kembali</a>
<?php
}?>
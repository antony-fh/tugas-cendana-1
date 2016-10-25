<?php session_start();
include('bagian/header.php'); 
include('sc/login.php'); 
use sc\Login as Login;
$log = new Login();
if (isset($_POST['Masuk'])) {

    if (empty($_POST['n-p']) || empty($_POST['p-p'])) {
            echo"Username or Password is invalid";
    }
    else {
        $nama=$_POST['n-p'];
        $pass=$_POST['p-p'];
        $login = $log->check_login($nama,$pass);
        if ($login) {
           header("location:tambah-dp.php");
        } else {
           header("location:index.php");
        }
    }
}

?>
            <section id="mainbar" style="text-align: center;">
                <img src="assets/img/data-panda.png" style="width:320px;height: 320px;">
                <div class="clearfix"></div>
            <form action="" method="POST">
            <div class="login">
                <label for='n-p'>
                    nama pengguna
                </label>
                <input type="text" name="n-p">
                <label for="p-p">
                    password pengguna
                </label>
                <input type="password" name="p-p">
                <input type="submit" name="Masuk" onmouseover="background:white; color:black;" value="Masuk">
            </div>
            </form>
        </section>
        <footer style="text-align: center;margin-top: 60px;">
            &copy; antony f. hartono 2016
        </footer>
</body>
</html>
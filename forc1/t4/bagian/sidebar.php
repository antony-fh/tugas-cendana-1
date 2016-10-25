<?php
include('sc/login.php');
use sc\Login as Login;
?>
<section id="konten">
        <div class="container">
            <section id="sidebar">
                <div class="sidebar-logo">
                    <img src="assets/img/data-panda.png" title="data panda" class="img-bulat">
                </div>
                <div class="sidebar-pengguna">
                    <a href="../Wawankretek/index.php"><?= $_SESSION['log']; ?></a>
                </div>
                <div class="sidebar-menu">
                    <h2>Menu</h2>
                    <nav>
                        <ul>
                            <li>
                                <a href="tambah-dp.php"><span class="fa fa-plus"></span>tambah entri</a>
                            </li>
                            <li>
                                <a href="ubah-dp.php"><span class="fa fa-pencil"></span>ubah entri</a>
                            </li>
                            <li>
                                <a href="hapus-dp.php"><span class="fa fa-trash-o"></span>hapus entri</a>
                            </li>
                            <li>
                                <a href="dp.php">Sek mben ae....!!!!</a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="sidebar-me">
                    <nav>
                        <ul>
                            <li>
                                <a href="about.php">about</a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="copyright">
                    &copy; <a href="www.latihotak.com" target="_blank">antony f. hartono</a> 2016
                </div>
            </section>
            <!-- <form action="sidebar.php"> -->
            <a href="?q=logout"><button class="logout">log out</button></a>
            <?php
            $log = new Login();
            if (!$log->get_session()){
               header("location:index.php");
           }
                if (isset($_GET['q'])) {
                    $log->logout();
                    header('location:../index.php');
                }
            ?>
            <!-- </form> -->
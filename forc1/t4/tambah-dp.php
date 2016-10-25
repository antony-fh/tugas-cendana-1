<?php 
session_start();
include_once('bagian/header.php');
use sc\_model_blog\model_blog as Blog; 
    $blog = new Blog;
    $uploaddir='../wawankretek/assets/gambar_blog/';
    if(isset($_POST['tambah'])) {
    $upload= $uploaddir.$_FILES['upload']['name'];
        //Data
        $data['blog_judul'] = $_POST['j-entri'];
        $data['blog_tanggal'] = 'date(now())';
        $data['blog_isi'] = $_POST['i-entri'];
        $data['blog_gambar'] = $_FILES['upload']['name'];
        $result = $blog->INSERT('blog',$data);
        if ($result) {
            move_uploaded_file($_FILES['upload']['tmp_name'], $upload);
            echo "<script>alert('Berhasil Menambahkan Data');</script>";
        }
    }
?>
<body>
    <?php include_once('bagian/sidebar.php'); ?>
    <form action="" method="POST" enctype="multipart/form-data">
        <section id="mainbar">
            <div class="isi">
                <fieldset>
                   <legend><span class="fa fa-plus-circle"></span>Tambah Entri</legend>
                <div class="isi-form">
                    <label for="j-entri">Judul Entri</label>
                    <input type="text" name="j-entri" maxlength="140">
                </div>
                <div class="isi-form">
                    <label for="i-entri">Isi Entri</label>
                    <textarea name="i-entri"></textarea>
                </div>
                <div class="isi-form">
                    <input type="file" name="upload">
                </div>
                <div class="isi-form">
                    <button type="submit" name="tambah">Tambah</button>
                </div>
            </fieldset>
        </div>
    </section>
</form>
<!---->
</div>
</section>
</body>
</html>

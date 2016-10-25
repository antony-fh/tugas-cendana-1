<?php session_start();
include_once('bagian/header.php'); 
$id= $_GET['id'];
use sc\_model_blog\model_blog as Blog; 
    $blog = new Blog;
    $data_blog = $blog->SELECT_ALL();
    $dat = $blog->SELECT_BY_ID($id);
    $uploaddir='../wawankretek/assets/gambar_blog/';
if (isset($_POST['ubah'])) {
    //Data
    $data['blog_judul'] = mysql_escape_string($_POST['j-entri']);
    $data['blog_tanggal'] = 'date(now())';
    $data['blog_isi'] = mysql_escape_string($_POST['i-entri']);
    $data['blog_gambar'] = $_FILES['upload']['name'];
    $result = $blog->UPDATE($data, $id);
    if ($result) {
        echo "<script type='text/javascript'>alert('Berhasil Mengubah Data');</script>";
        header('location:ubah-dp.php');
    }
}

?>
<body>
    <?php include_once('bagian/sidebar.php'); ?>
    <form action="" method="POST" enctype="multipart/form-data">
        <section id="mainbar">
            <div class="isi">
                <fieldset>
                <legend><span class="fa fa-edit"></span>Ubah Entri</legend>
                 <div class="isi-form">
                    <table class="tb-select">
                      <thead> 
                          <tr>
                              <th>Judul Entri</th>
                              <th>Isi Entri</th>
                              <th>Hapus</th>
                          </tr>
                      </thead>
                      <tbody>

                        <?php
                        foreach ($data_blog as $brs) {
                            ?>
                            <tr>
                                <td><?php echo $brs['blog_judul']?></td>
                                <td><?php echo $brs['blog_isi']?></td>
                                <td><a class='b-ubah' href="ubah-dp-e.php?id=<?php echo $brs['id']?>">Ubah <span class="fa fa-edit"></a></td>
                            </tr>
                        </tbody>
                        <?php
                    }
                    ?>

                </table>  
            </div>
            <div class="isi update">
                <fieldset>
                <legend><span class="fa fa-edit"></span>Ubah Entri</legend>
                 <div class="isi-form">
                    <label for="j-entri">Judul Entri</label>
                    <input type="text" name="j-entri" maxlength="140" value="<?=$dat['blog_judul'] ?>">
                </div>
                <div class="isi-form">
                    <label for="i-entri">Isi Entri</label>
                    <textarea name="i-entri" ><?=$dat['blog_isi'] ?></textarea>
                </div>
                <div class="isi-form">
                    <label for="g-entri">Gambar Entri</label>
                    <img style="width:200px" src="<?=$uploaddir.$dat['blog_gambar']?>">
                    <input style="vertical-align: top;width: auto;" type="file" name="upload">
                </div>
                <div class="isi-form">
                    <button type="submit" name="ubah">Ubah</button>
                    <a href="ubah-dp.php" style="color: white"><button type="button" name="batal">Batal</button></a>
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

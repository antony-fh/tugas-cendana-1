<?php session_start();
include('bagian/header.php'); 
use sc\_model_blog\model_blog as Blog; 
    $blog = new Blog;
  if (isset($_GET['search'])) {
    $data_blog = $blog->LIKE('blog_judul',$_GET['search']);
  } else {
    $data_blog = $blog->SELECT_ALL();
  }
?>
<body>
    <?php include('bagian/sidebar.php'); ?>

        <section id="mainbar">
            <div class="isi">
                <fieldset>
                    <legend><span class="fa fa-edit"></span>Ubah Entri</legend>
                      <div class="search">
                      <form action="" method="GET">
                        <input type="text" name="search">
                        <input type="submit" value="Cari">
                      </form>
                      </div>
                    <div class="isi-form">
                      <table class="tb-select">
                      <thead> 
                          <tr>
                              <th>Judul Entri</th>
                              <th>Isi Entri</th>
                              <th>Hapus</th>
                          </tr>
                      </thead>
<form action="" method="GET">
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
</form>
    <?php
  }
?>
                          
                      </table>  
                    </div>
                </fieldset>
            </div>
        </section>
<!---->
    </div>
</section>
</body>
</html>
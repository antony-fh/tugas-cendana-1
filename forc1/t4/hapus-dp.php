<?php session_start();
include('bagian/header.php'); 
use sc\_model_blog\model_blog as Blog; 
    $blog = new Blog;
  if (isset($_GET['search'])) {
    $data_blog = $blog->LIKE($_GET['search']);
  } else {
    $data_blog = $blog->SELECT_ALL();
  }
?>
<body>
    <?php include('bagian/sidebar.php'); ?>
<form action="act-hapus.php" method="GET">
        <section id="mainbar">
            <div class="isi">
                <fieldset>
                    <legend><span class="fa fa-trash-o"></span>Hapus Entri</legend>
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
    <td><a class='b-hapus' href="act-hapus.php?id=<?php echo $brs['id']?>">Hapus <span class="fa fa-trash-o"></a></td>
    </tr>
                      </tbody>
    <?php
  }
?>
                          
                      </table>  
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
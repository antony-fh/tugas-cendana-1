<?php include('bagian/header.php');
$id=$_GET['id'];
include_once('sc/model-blog.php');
use sc\_model_blog\model_blog as Blog; 
    $blog = new Blog;
    $data_blog = $blog->SELECT_BY_ID($id);
    $uploaddir='assets/gambar_blog/';
?>

<section id="hero">
</section>

<section id="content">
    <div class="container-c">
<section id="iklan">
    <img src="assets/img/media-iklan.jpg">
</section>
<section id="mainbar">
    
    <div class="blog-wrapper">
        
        <div class="blog-item">

            <h1 class="blog-title"><?php echo $data_blog['blog_judul']?></h1>
            <div class="blog-meta"><?php echo $data_blog['blog_tanggal']?></div>
            <?php
            if ($data_blog['blog_gambar']=="") {
              ?> 
              <div class="blog-image"></div>
              <?php  
             } else{
            ?>
              <div class="blog-image"><img src="<?php echo $uploaddir.$data_blog['blog_gambar']?>"></div>
            <?php 
             }
            ?>
            <p class="blog-content" style="border: 2px dashed burlywood;">
                <?php echo $data_blog['blog_isi']?>
            </p>
            <div class="blog-author">Wawan Kretek</div>
        </div>

    </div>

</section>

<?php include('bagian/sidebar.php')?>

<?php include('bagian/footer.php')?>
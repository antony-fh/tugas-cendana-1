<?php include('bagian/header.php');
include_once('sc/model-blog.php');
use sc\_model_blog\model_blog as Blog; 
    $blog = new Blog;

    $data_blog = $blog->SELECT_ALL();
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
    <?php
    foreach ($data_blog as $brs) {
    ?>
        <div class="blog-item">
            <h1 class="blog-title"><?php echo $brs['blog_judul']?></h1>
            <div class="blog-meta"><?php echo $brs['blog_tanggal']?></div>
            <p class="blog-content">
                <?php echo substr($brs['blog_isi'],0,250)?>
            </p>
            <a href="konten.php?id=<?php echo $brs['id']?>" class="blog-readmore">Read More</a>
        </div>
     <?php
  }
?>

    </div>

</section>

<?php include('bagian/sidebar.php')?>

<?php include('bagian/footer.php')?>
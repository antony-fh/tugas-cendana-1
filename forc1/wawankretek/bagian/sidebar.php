<?php
use sc\_model_blog\model_blog as Blog; 
    $blog = new Blog;
  if (isset($_GET['search'])) {
    $data_blog = $blog->LIKE($_GET['search']);
  } else {
    $data_blog = $blog->SELECT_ALL();
  }
?>
<section id="sidebar">

    <div class="module">
        <h3 class="module-title">
            Latest News
        </h3>
        <div class="module-content">
            <ul>
                <?php
                foreach ($data_blog as $brs1) {
                    ?>
                    <li><a href="konten.php?id=<?php echo $brs1['id']?>"><?php echo $brs1['blog_judul']?></a></li>
                    <?php
                }
                ?>

            </ul>
        </div>
    </div>

    <div class="module">
        <h3 class="module-title">
            Popular News
        </h3>
        <div class="module-content">
            <ul>
                <li><a href="">Lorem Ipsum</a></li>
                <li><a href="">Lorem Ipsum</a></li>
                <li><a href="">Lorem Ipsum</a></li>
                <li><a href="">Lorem Ipsum</a></li>
            </ul>
        </div>
    </div>

    <div class="module">
        <h3 class="module-title">
            Sponsored By
        </h3>
        <div class="module-content">
            <img style="width: 100%" src="assets/img/epic-golden-v1.png">
        </div>
    </div>
</section>    </div>
</section>

<div class="clearfix"></div>
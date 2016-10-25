<?php include('../config.php');
include('sc/model-blog.php');
use sc\_model_blog\model_blog as Blog; 
    $blog = new Blog;

	if (isset($_GET['id'])) {
		//Data
		$id = $_GET['id'];

		$result = $blog->DELETE($id);

		if ($result) {
			header("location: hapus-dp.php");
		}
	}

// echo "anda akan melakukan hapus di id =" .  $id;

?>

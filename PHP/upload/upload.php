<?php
echo "<pre>";
print_r($_FILES);
exit();
	$uploaddir ='file';
	$upload = $uploaddir.$_FILES['upload']['name'];

if (move_uploaded_file($_FILES['upload']['tmp_name'], $upload)) {
	echo "<img src='$upload'/>";
}
// unlink($upload);
?>
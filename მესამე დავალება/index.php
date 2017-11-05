<?php 

if(!empty($_FILES)){


	$target_file = "uploads/" . basename($_FILES["uploadedFile"]["name"]);
	$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
	if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "gif" ) {
		move_uploaded_file($_FILES["uploadedFile"]["tmp_name"], "uploads/".$_FILES["uploadedFile"]["name"]);
	} else {
		move_uploaded_file($_FILES["uploadedFile"]["tmp_name"], "images/".$_FILES["uploadedFile"]["name"]);
	}
}


?>

<!DOCTYPE html>
<html>
<head>
	<title>მესამე დავალება</title>
	<meta charset="utf-8">
</head>
<body>
<form action="#" method="post" enctype="multipart/form-data">
	<input type="file" name="uploadedFile">
	<input type="submit" value="ატვირთვა">
</form>
</body>
</html>
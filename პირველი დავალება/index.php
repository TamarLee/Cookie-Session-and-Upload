<?php 
session_start();
$n = 7;
if(!empty($_POST)){
	
	if(!isset($_SESSION["data"])){
		$_SESSION["data"][]=$_POST["text"];
	} else {
		if(sizeof($_SESSION["data"])<$n){
			$_SESSION["data"][]=$_POST["text"];
		} else {
			for ($i=0; $i < $n-1; $i++) { 
				$_SESSION["data"][$i]=$_SESSION["data"][$i+1];
			}
			$_SESSION["data"][$n-1]=$_POST["text"];
		}
	}
}


?>
<!DOCTYPE html>
<html>
<head>
	<title>პირველი დავალება</title>
</head>
<body>
<form action="#" method="post">
	<p><input type="text" name="text"></p>
	<p><input type="submit" value="გაგზავნა"></p>
</form>
</body>
</html>
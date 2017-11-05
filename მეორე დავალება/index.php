

<!DOCTYPE html>
<html>
<head>
	<title>მეორე დავალება</title>
</head>
<body>
	ჩვენი საიტი


	<?php if(!isset($_COOKIE["name"])){ ?>
		<div id="popup">
			<p>ძალიან მნიშვნელოვანი შეტყობინების ტექსტი</p>
			<a href="/">დახურვა</a>
			<?php setcookie("name", "value", time() + 86400); ?>
		</div>
	
	<?php } ?>
	

</body>
</html>
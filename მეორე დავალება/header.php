<?php
setcookie("name", "value", time() + 86400);
header('Location: /');

?>
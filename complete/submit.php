<?php
	$a = $_POST['udid'] . "\n" . $_POST['name'] . "\n" . $_POST['email'] . "\n" . $_POST['product'];
	mail("YOU@YOUR-DOMAIN.c-o-m", "UDID", $a);
	header('Location: finished.html');
?>
	
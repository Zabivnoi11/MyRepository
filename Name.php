<?php
$name = "Не известно";

	if (isset($_REQUEST['name'])) {
		$name = $_REQUEST['name'];
		echo 'Привет, '.$name;
	}
?>

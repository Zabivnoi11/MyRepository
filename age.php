<?php


$name = "Не известно";

	if (isset($_POST['name'])) {
		$name = $_POST['name'];
		
    }
    if (isset($_POST['age'])) {
        $age = $_POST['age'];
        
    }
    echo "Привет, ".$name;
    
    echo "<br> Ваш возраст: ".$age;
?>
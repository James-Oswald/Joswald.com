<?php
	$bb = "";

	if ($_POST["key"] == "granted")
	{
		$bb = '<link rel="stylesheet" type="text/css" href="/css/blackbar.css"/>';
	}

	echo '<meta charset="UTF-8">
	<meta name="author" content="James Oswald"/> <!--Thats me!-->
	<meta name="keywords" content="James,Oswald,Jozwald,Joswald"/>
	<meta name="charset"
	<meta name="descripion" content="Jozwald.com is the best site on the internet. All run and made by your local Joswald"/>
	<link rel="icon" href="/Icons/lex.ico"/>
	<link rel="stylesheet" type="text/css" href="/css/main.css"/>'
	. $bb;
?>
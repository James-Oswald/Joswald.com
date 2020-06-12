<?php
	$user = $_REQUEST["u"];
	$datafile = 'players/player' . $user . '.json';
	file_put_contents($datafile, '{"inuse":0, "name" : "", "img": "", "xpos" : 0, "ypos" : 0}');
?>
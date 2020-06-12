<?php 
	for ($i = 0; $i < 10; $i++)
	{
		$datafile = 'players/player' . $i . '.json';
		file_put_contents($datafile, '{"inuse":0, "name" : "", "img": "", "xpos" : 0, "ypos" : 0}');
	}
?>
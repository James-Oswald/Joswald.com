<?php
	$user = $_REQUEST["u"];
	$type = $_REQUEST["t"];
	$data1 = $_REQUEST["d1"];
	$data2 = $_REQUEST["d2"];
	if ($type == "i")
	{
		$datafile = 'players/player' . $user . '.json';
		$player = json_decode(file_get_contents($datafile));
		$player->{'inuse'} = 1;
		$player->{'name'} = $data1;
		$player->{'img'} = $data2;
		file_put_contents($datafile, json_encode($player));
	}
	else if($type == "c")
	{
		$datafile = 'players/player' . $user . '.json';
		$player = json_decode(file_get_contents($datafile));
		$player->{'ypos'} = intval($data2);
		$player->{'xpos'} = intval($data1);
		file_put_contents($datafile, json_encode($player));
	}
	else if ($type == "k")
	{
		$datafile = 'players/player' . $user . '.json';
		$player = json_decode(file_get_contents($datafile));
		switch ($data1)
		{
			case ("w"):
				$player->{'ypos'} += 10;
				break;
			case ("s"):
				$player->{'ypos'} -= 10;
				break;
			case ("a"):
				$player->{'xpos'} -= 10;
				break;
			case ("d"):
				$player->{'xpos'} += 10;
				break;
		}
		file_put_contents($datafile, json_encode($player));
	}
?>
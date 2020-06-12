<?php
	$dataobject = json_decode(file_get_contents("data.json"));
	$user = $_COOKIE["user"];
	$next = count($dataobject->players) + 1;
	if ($user > $next - 1)
	{
		array_pad($dataobject->players, $next, $user)
		$dataobject->players[$next - 1]->player = $user;
		$dataobject->players[$next - 1]->xpos = 0;
		$dataobject->players[$next - 1]->ypos = 0;
	}
	else
	{
		switch ($_REQUEST["q"])
		{
			case "w":
				$dataobject->players[$user]->ypos += 10;
				break;
			case "s":
				$dataobject->players[$user]->ypos -= 10;
				break;
			case "a":
				$dataobject->players[$user]->xpos += 10;
				break;
			case "d":
				$dataobject->players[$user]->xpos -= 10;
				break;
			default:
				die("Failure");
		}
		$returndata = json_encode($dataobject);
		file_put_contents("data.json", $returndata);
		echo $returndata;
	}
?>
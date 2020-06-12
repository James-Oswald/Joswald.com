<?php
	header('Content-Type: text/event-stream');
	header('Cache-Control: no-cache');
	do
	{	
		$sendval = '{"players":[';
		for ($i = 0; $i < 10; $i++)
		{
			$info = file_get_contents("players/player" . $i . ".json");
			if ($i == 0)
			{
				$sendval .= $info;
			}
			else
			{
				$sendval .= ',' . $info;
			}
		}
		$sendval .= ']}';
		echo "data: $sendval \n\n";
		flush();
	}
	while(true);
?>
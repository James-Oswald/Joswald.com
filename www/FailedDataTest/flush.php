<?php
	header('Content-Type: text/event-stream');
	header('Cache-Control: no-cache');
	echo file_get_contents("data.json");
	flush();
?>
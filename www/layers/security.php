<?php
	function newmbe($url, $class = "", $caption = "")
	{
		echo "<form action='layerpointer.php' method='post'>
			<input type='text' name='masterkey' value=" . $url . " style='display:none;'/>
			<input class=" . $class . " type='submit' value=" . $caption ."/>
			</form>";
	}
	
	function newmbr($url, $class = "", $caption = "")
	{
		return "<form action='layerpointer.php' method='post'>
			<input type='text' name='masterkey' value=" . $url . " style='display:none;'/>
			<input class=" . $class . " type='submit' value=" . $caption ."/>
			</form>";
	}

	if ($_POST["key"] != "granted")
	{
		header("Location:/404.php");
	}
?>
	
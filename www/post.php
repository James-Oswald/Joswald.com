<?php
	function postmsg($name, $msg, $isadmin, $date, $preimg, $img, $ip)
	{
		$text = "\n" . $isadmin . "|" . $preimg . "|" . $img . "|" . $date . "|" . $name . "|". $ip . "|" . $msg;
		$file = fopen("msgdb.txt", "ab") or die("Unable to open file! Oh Noooo");
		fwrite($file, $text);
		fclose($file);
		sleep(0.5);
		header("Location: /chat.php");
	}
	
	function illegal($msg)
	{
		if (strpos($msg, "<", 0) !== FALSE)
		{
			die("You can not use HTML (<) in your name/message!");
		}
	}
	
	$name = $_POST["name"];
	$pass = $_POST["pass"];
	$msg = $_POST["msg"];
	$img = $_POST["pic"];
	$ip = $_SERVER['REMOTE_ADDR'];
	$date = date("m:d:Y-h:ia");
	
	illegal($intpic);
	
	$preimg = 0;
	
	if ($img == "")
	{
		$preimg = 0;
	}
	else
	{
		$preimg = 1;
	}
	
	if ($msg == "")
	{
		die("You must type a message to use the board");
	}
	if ($name == "")
	{
		$name = "Anonymous";
	}
	
	if ($pass == "")
	{
		$isadmin = 0;
		illegal($name);
		illegal($msg);
		postmsg($name, $msg, $isadmin, $date, $preimg, $img, $ip);
	}
	
	else if ($pass == "dankest")
	{
		$isadmin = 3;
		illegal($name);
		illegal($msg);
		postmsg($name, $msg, $isadmin, $date, $preimg, $img, $ip);
	}
	
	else if ($pass == "mattawai")
	{
		$isadmin = 2;
		illegal($name);
		illegal($msg);
		postmsg($name, $msg, $isadmin, $date, $preimg, $img, $ip);
	}
	else if ($pass == "goodtrees")
	{
		$isadmin = 1;
		postmsg($name, $msg, $isadmin, $date, $preimg, $img, $ip);
	}
	else
	{
		die ("The 'password' location is meant for
		the use of cataloged users, just ignore and leave it blank, thanks");
	}
?>

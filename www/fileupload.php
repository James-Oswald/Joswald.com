<?php
	function upload($level, $filepath, $filetype, $name, $com, $ip)
	{
		$text = "\n" . $level . "|" . $filepath . "|" . $filetype . "|" . $name . "|" . $ip . "|" . $com;
		$file = fopen("filedb.txt", "ab") or die("Unable to open file! Oh Noooo");
		fwrite($file, $text);
		fclose($file);
		sleep(0.5);
	}

	function illegal($msg)
	{
		if (strpos($msg, "<", 0) !== FALSE)
		{
			die("You can not use HTML (\"<\") in your file name / comment!");
		}
	}

	$name = $_POST["name"];
	$pass = $_POST["pass"];
	$com = $_POST["comment"];
	$ip = $_SERVER['REMOTE_ADDR'];
	
	illegal($name);
	illegal($com);
	
	if($name == "")
	{
		die("you must name your file to upload it!");
	}
	
	if($com == "")
	{
		die("you must describe your file to upload it!");
	}
	
	if($pass == "")
	{
		$level = 0;
	}
	else if($pass == "goodtrees")
	{
		$level = 1;
	}
	else if($pass == "trustme")
	{
		$level = 2;
	}
	else
	{
		die("The 'password' location is meant for
		the use of cataloged users, just ignore and leave it blank, thanks");
	}

	$targetdir = "filebin/";
	$targetfile = $targetdir . basename($_FILES["upload"]["name"]);
	$filetype = pathinfo($targetfile,PATHINFO_EXTENSION);
	
	if (file_exists($targetfile)) 
	{
		die("Sorry, file with that name already exists.");
	}
	if ($_FILES["upload"]["size"] > 100000000) 
	{
		die("Sorry, your file is too large.");
	}
	
	if (move_uploaded_file($_FILES["upload"]["tmp_name"], $targetfile)) 
	{
		upload($level, $targetfile, $filetype, $name, $com, $ip);
		header("Location: /filebin.php");
	} 
	else
	{
		die("Sorry, there was an error uploading your file.");
	}
?>


<?php
	$pass = $_POST["password"];
	$text = $_POST["input"];
	$text2 = $_POST["input2"];
	$del = $_POST["del"];
	
	if ($pass != "mattawai")
	{
		die("Incorect Password");
	}
		
	if ($del == "all")
	{
		$files = glob('filebin/*');
		foreach($files as $file)
		{
			if(is_file($file))
			{
				unlink($file);
			}
		}
	}
	else if ($del != "")
	{
		$file = $del;
		if(is_file($file))
		{
			unlink($file);
		}
	}

		
	$file1 = fopen("msgdb.txt", "w") or die("unable to open");
	fwrite($file1, $text);
	fclose($file1);
	$file2 = fopen("filedb.txt", "w") or die("unable to open");
	fwrite($file2, $text2);
	fclose($file2);
	header("Location: /smite.php");
?>
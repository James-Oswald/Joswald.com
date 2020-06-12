<?php include "layers/security.php";?>
<!DOCTYPE html>
<html>
	<head>
		<?php include 'mainhead.php';?>
		<title> Smite </title>
	</head>
	<body>
		<?php include 'main.php';?>
		<p> Format: Rank | pre-image | image url | name | IP | Message </p>
		<textarea id="chat" form="sub" name="input" rows="25" style="width:99%;"><?php
		
				$file = fopen("msgdb.txt", "r");
				$rv = "";
				while(! feof($file))
				{
					$rv = $rv . fgets($file);
				}
				echo $rv;
			
		?></textarea>
		<p> Format: Security Level | File Location | File Type | File Name | IP | Description </p>
		<textarea id="file"  form="sub" name="input2" rows="25" style="width:99%;"><?php
		
				$file2 = fopen("filedb.txt", "r");
				$rb = "";
				while(! feof($file2))
				{
					$rb = $rb . fgets($file2);
				}
				echo $rb;
			
		?></textarea>
		<form id="sub" method="post" action="actsmite.php">
			<p> File Deletion </p>
			<input name="del" type="text"/><br/><br/>
			<p> Admin Password: </p>
			<input type="password" name="password"/>
			<input type="submit" value="Smite"/>
		</form>
	</body>
</html>
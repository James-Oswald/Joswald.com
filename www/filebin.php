<!DOCTYPE html>
<html>
	<head>
		<?php include 'mainhead.php';?>
		<link rel="stylesheet" type="text/css" href="/css/filebin.css"/>
		<title> JozFile Bin </title>
	</head>
	<body>
		<?php include 'main.php';?>
		<div id="content">
			<p> 
				Welocme to the file bin. Here you can upload and download whatever files you want!
				Please note that since it is an open uploads board not all files are safe to upload
				and may contain viruses/illegal content. In no way is the site or its adminastration
				able to be held responsible for damage caused by using this page.
			</p>
			<form action="fileupload.php" method="post" enctype="multipart/form-data">
				<fieldset>
					<legend> Upload A File </legend>
					<p> File Name </p>
					<input name="name" size="40" type="text" maxlength="20"/><br/>
					<p> Security Password (Leave Blank) </p>
					<input name="pass" size="40" type="password" maxlength="15"/><br/>
					<p> Description </p>
					<input name="comment" size="40" type="text" maxlength="100"/><br/><br/>
					<input name="upload" type="file"/>
					<input type="submit" value="Upload"/>
				</fieldset>
			</form>
			<br/>
			<table>
				<tr>
					<th> File Name </th>
					<th> File Type </th>
					<th> Description </th>
					<th> Download </th>
				</tr>
				<?php
					function nextpos($str)
					{
						return strpos($str, "|");
					}
					
					function fill($item)
					{
						global $seq;
						$seq = $item . $seq;
					}
				
					function display($rawmsg, $rank)
					{
						$rawmsg = substr($rawmsg, 2, strlen($rawmsg) - 2);
						$loc = substr($rawmsg, 0, nextpos($rawmsg));
						$rawmsg = substr($rawmsg, strlen($loc) + 1, strlen($rawmsg) - strlen($loc) + 1);
						$type = substr($rawmsg, 0, nextpos($rawmsg));
						$rawmsg = substr($rawmsg, strlen($type) + 1, strlen($rawmsg) - strlen($type) + 1);
						$name = substr($rawmsg, 0, nextpos($rawmsg));
						$rawmsg = substr($rawmsg, strlen($name) + 1, strlen($rawmsg) - strlen($name) + 1);
						$ip = substr($rawmsg, 0, nextpos($rawmsg));
						$rawmsg = substr($rawmsg, strlen($ip) + 1, strlen($rawmsg) - strlen($ip) + 1);
						$com = $rawmsg;
						$tosend = $tosend . "<tr class = '" . $rank . "'> <td>" . $name . "</td> <td>" . $type . "</td> <td>" . $com . "</td> <td> <a href='" . $loc . "' download='" . $name . "'> <button type='button'> Download </button> </a> </td> </tr>";
						fill($tosend);
					}
					
					$file = fopen("filedb.txt", "r") or die("Failed to open file database");
					while (! feof($file))
					{
						$rawmsg = fgets($file);
						$level = substr($rawmsg,0,1);
						if ($level == "1")
						{
							display($rawmsg, "admin");
						}
						else if($level == "2")
						{
							display($rawmsg, "safe");
						}
						else
						{
							display($rawmsg, "user");
						}
					}
					echo $seq;
				?>
			</table>
		</div>
		<br/>
		<br/>
	</body>
</html>

<!DOCTYPE html>
<html>
	<head>
		<?php include 'mainhead.php';?>
		<link rel="stylesheet" type="text/css" href="/css/chat.css"/>
		<title> Jozwald Chat </title>
	</head>
	<body>
		<?php include 'main.php';?>
		<div id="content">
			<form action="post.php" method="post" enctype="multipart/form-data">
				<fieldset>
					<legend> Message: </legend>
					<p><i>Note: The admin password should be left blank. If you do not enter a name, your name will be "Anonymous"</i></p>
					<p>Alias: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Admin Password:</p>
					<input class="crid" type="text" maxlength="15" name="name"/>
					<input class="crid" type="password" maxlength="15" name="pass"/>
					<br/><br/>
					<fieldset>
						<legend> Image (Optional) </legend>
						<p><i> Paste an image URL </p></i>
						<input type="url" name="pic"/>
					</fieldset>
					<p> Message: </p>
					<input class="message" type="text" maxlength="2000" size="100" name="msg"/>
					<br/>
					<br/>
					<input type="checkbox" onclick="document.getElementById('postbox').disabled = false; this.checked='checked'"/>
					By checking this box you are agreeing to the <a href="/legaljargon.txt" style="color:white;">terms and services</a>.
					<br/>
					<br/>
					<input id="postbox" type="submit" value="Post" disabled />
				</fieldset>
			</form>
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
				
				function post($rawmsg ,$rank)
				{
					$rawmsg = substr($rawmsg, 2, strlen($rawmsg) - 2);
					$preimg = substr($rawmsg,0,1);
					$rawmsg = substr($rawmsg, 2, strlen($rawmsg) - 2);
					$img = substr($rawmsg, 0, nextpos($rawmsg));
					$rawmsg = substr($rawmsg, strlen($img) + 1, strlen($rawmsg) - strlen($img) + 1);
					$date = substr($rawmsg, 0, nextpos($rawmsg));
					$rawmsg = substr($rawmsg, strlen($date) + 1, strlen($rawmsg) - strlen($date) + 1);
					$name = substr($rawmsg, 0, nextpos($rawmsg));
					$rawmsg = substr($rawmsg, strlen($name) + 1, strlen($rawmsg) - strlen($name) + 1);
					$ip = substr($rawmsg, 0, nextpos($rawmsg));
					$rawmsg = substr($rawmsg, strlen($ip) + 1, strlen($rawmsg) - strlen($ip) + 1);
					$msg = $rawmsg;
					//begin final input formating
					$tosend = "";
					$tosend = $tosend . "<div class='" . $rank . "'>"; 
					if ($rank == "admin")
					{
						$tosend = $tosend . "<img class='adminpic' src='/Images/icon.png'>";
					}
					$tosend = $tosend . "<p class='left'>";
					if ($rank == "admin")
					{
						$tosend = $tosend . "<b> Administrator ### " . $name . "</b>";
					}
					else if ($rank == "mod")
					{
						$tosend = $tosend . "<b> Moderator ## " . $name . "</b>";
					}
					else if ($rank == "meme")
					{
						$tosend = $tosend . "<b> Meme Lord # " . $name . "</b>";
					}
					else
					{
						$tosend = $tosend . $name;
					}
					$tosend = $tosend . " (" . $date . ") </p>";
					if ($preimg == 1)
					{
						$tosend = $tosend . "<br/><img class='userimg' src='" . $img . "'/>";
					}
					$tosend = $tosend . "<p class='msg'>" . $msg . "</p></div>";
					fill($tosend);
				}
				
				$file = fopen("msgdb.txt", "r") or die("Oh no the file open failed");
				while (! feof($file))
				{
					$rawmsg = fgets($file);
					$level = substr($rawmsg,0,1);
					if ($level == "1")
					{
						post($rawmsg, "admin");
					}
					else if($level == "2")
					{
						post($rawmsg, "mod");
					}
					else if($level == "3")
					{
						post($rawmsg, "meme");
					}
					else
					{
						post($rawmsg, "user");
					}
				}
				fclose($file);
				echo $seq;
			?>
		</div>
	</body>
</html>
<?php
	$pass = $_POST["pass"];
	$url = $_POST["masterkey"];
	
	if (!empty($url))
	{
		$page = $url;
	}
	else
	{
		if ($pass == "goodtrees")
		{
			$page = "/layers/layer3.php";
		}
		else if($pass == "blackboard")
		{
			$page = "/layers/layer13.php";
		}
		else
		{
			header("Location:/404.php");
		}
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<title> Granted </title>
	</head>
	<body>
		<form id="para" action=<?php echo $page;?> method="post">
			<input type="text" name="key" value="granted">
		</form>
		<script>
			document.getElementById("para").submit();
		</script>
	</body>
</html>
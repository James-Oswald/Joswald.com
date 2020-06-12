<?php
	$pass = $_POST["pass"];
	
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
		header("Location:/ip.php");
	}
?>
<!DOCTYPE html>
<html>
	<head>
	</head>
	<body>
		<form id="para" action=<?php echo $page;?> method="post">
			<input type="text" name="key" value="granted">
		</form>
		<script>
			documet.getElementById("para").submit();
		</script>
	</body>
</html>
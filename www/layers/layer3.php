<?php include "security.php";?>
<!DOCTYPE html>
<html>
	<head>
		<?php include "./mainhead.php";?>
		<title> Layer 3 </title>
	</head>
	<body>
		<?php include "./main.php";?>
		<?php include "blackbar.php";?>
		<form action="layerpointer.php" method="post">
			<input type="text" name="masterkey" value="/smite.php" style="display:none;"/>
			<input type="submit" value="Smite"/>
		</form>
	</body>
</html>
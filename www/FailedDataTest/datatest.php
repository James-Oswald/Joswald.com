<?php
	$dataobject = json_decode(file_get_contents("data.json"));
	$val = count($dataobject->players);
	setcookie("user", $val);
?>
<!DOCTYPE html>
<html>
	<head>
		<?php include "./mainhead.php";?>
		<script>
			function setupdisplay()
			{
				b = document.getElementById("board");
				board = b.getContext("2d");
			}
			
			function display(data)
			{
				context.clearRect(0, 0, canvas.width, canvas.height);
				for (var i = 0; i < data.players.length; i++)
				{
					board.drawImage(document.getElementById("pi"), data.players[i].xpos, data.players[i].ypos)
				}
			}
		</script>
		<script>
			function sendXHR(data)
			{
				var xhr = new XMLHttpRequest();
				xhr.onreadystatechange = function()
				{
					if (xhr.readyState == 4 && xhr.status == 200)
					{
						var displayobject = JSON.parse(xhr.responseText);
						display(displayobject);
					}
				};
				xhr.open("GET", "testhandler.php?q=" + data, true);
				xhr.send();
			}
		</script>
		<script>
			function keypresshandler(event)
			{
				var key = event.keycode;
				if (key == 97)
				{
					var keyc = "a";
				}
				else if (key == 119)
				{
					var keyc = "w";
				}
				else if (key == 115)
				{
					var keyc = "s";
				}
				else if (key == 100)
				{
					var keyc = "d";
				}
				else
				{
					keyc = "NONE";
				}
				if (keyc != "NONE")
				{
					sendXHR(keyc);
				}
			}
			
			function clickhandler(event)
			{
				
			}
		</script>
	</head>
	<body onkeypress="keypresshandler(event)">
		<?php include "./main.php";?>
		<img id="pi" style="display:none;" src="/Images/icon.png"/>
		<canvas id="board" onclick="clickhandler(event)">
			Your Browser dosen't suport canvases :(
		</canvas>
		<script>
			setupdisplay();
			sendXHR("Initial");
		</script>
	</body>
</html>
		
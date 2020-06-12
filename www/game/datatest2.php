<?php 
	$name = $_POST["name"];
	$img = $_POST["img"];
	$user = $_POST["user"];
	if ($name == "")
	{
		$name = "Annonymous";
	}
	if ($img == "")
	{
		$img = "http://static3.techinsider.io/image/55ba6d1f371d22dd2e8ba492-1106-1012/screen%20shot%202015-07-30%20at%202.31.57%20pm.png";
	}
	if ($user == -1 || $user == null)
	{
		$send = 0;
		$user = 0;
	}
	else
	{
		$send = 1;
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<?php include "./mainhead.php";?>
		<title> DataTest2 </title>
		<script>
			var send = <?php echo $send;?>;
			
			function sendureq(location)
			{
				var xhr = new XMLHttpRequest();
				xhr.open("GET", location + "?u=" + <?php echo $user;?>, true);
				xhr.send();
			}
			
			window.onbeforeunload = function()
			{
				sendureq("logout.php");
			}
			
			window.onunload = function()
			{
				sendureq("logout.php");
			}
			
			if (typeof(EventSource) !== "undefined") 
			{
				var source = new EventSource("/game/ssetest.php");
				source.onmessage = function(event)
				{
					display(event.data);
				};
				var source = new EventSource("/game/checksend.php");
				source.onmessage = function(event)
				{
					
				};
			} 
			else 
			{
				alert("The Game is unsuported on your browser!");
			}
		</script>
		<script>
			function display(dispdata)
			{
				document.getElementById("test").innerHTML = dispdata;
				reldata = JSON.parse(dispdata);
				var rawboard = document.getElementById("board");
				var board = rawboard.getContext("2d");
				board.beginPath();
				board.rect(0,0, rawboard.width, rawboard.height);
				board.fillStyle = "white";
				board.fill();
				for (i = 0; i < reldata.players.length; i++)
				{
					if (reldata.players[i].inuse != 0)
					{
						board.rect(reldata.players[i].xpos, reldata.players[i].ypos, 100, 100);
						board.stroke();
					}
				}
			}

			function sendXHR(intype, data1, data2) //n for null
			{
				console.log(intype + " " + data1 + " " + data2 + <?php echo $user;?>);
				var xhr = new XMLHttpRequest();
				xhr.open("GET", "testhandler2.php?t=" + intype + "&u=" + <?php echo $user;?> + "&d1=" + data1 + "&d2=" + data2, true);
				xhr.send();
			}
			
			function kpeh(event)
			{
				var key = event.keyCode;
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
					sendXHR("k", keyc, "n");
				}
			}
			
			function clickhandler(event)
			{
				var rect = document.getElementById("board").getBoundingClientRect();
				var x = event.clientX - rect.left;
				var y = event.clientY - rect.top;
				sendXHR("c", x, y);
			}
		</script>
	</head>
	<body onkeypress="kpeh(event)">
		<?php include "./main.php";?>
		<canvas onclick="clickhandler(event)" height="500" width="1000" id="board">
			No Canvas 4 U :(
		</canvas>
		<p id="test"></p>
		<p id="test2"></p>
		<form id="error" style="display:none;" action="gamesetup.php"  method="post">
			<input type="text" name="error" value="error"/>
		</form>
		<script>
			if (send != 0)
			{
				sendXHR("i", <?php echo "\"" . $name . "\"";?>, <?php echo "\"" . $img . "\"";?>);
			}
			else
			{
				document.getElementById("error").submit();
			}
		</script>
	</body>
</html>
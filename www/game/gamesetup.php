<!DOCTYPE html>
</html>
	<head>
		<?php include "./mainhead.php";?>
		<title> Setup </title>
		<script>
			function clearall()
			{
				var xhr = new XMLHttpRequest();
				xhr.open("GET", "clear.php", true);
				xhr.send();
			}
		
			function updateava(eventdata)
			{
				data = JSON.parse(eventdata);
				for (i = 0; i < 10; i++)
				{
					if (data.players[i].inuse == 1)
					{
						document.getElementById("r" + i).disabled = true;
						document.getElementById("r" + i).checked = false;
						document.getElementById("s" + i).innerHTML = "Slot " + (i + 1) + ": Ocupied by " + data.players[i].name; 
					}
					else
					{
						document.getElementById("r" + i).disabled = false;
						document.getElementById("s" + i).innerHTML = "Slot " + (i + 1) + ": Empty";
					}
				}
			}
		
			if (typeof(EventSource) !== "undefined") 
			{
				var source = new EventSource("/game/ssetest.php");
				source.onmessage = function(event)
				{
					updateava(event.data)
				};
			} 
			else 
			{
				alert("The Game is unsuported on your browser!");
			}
		</script>
	</head>
	<body>
		<?php include "./main.php";?>
		<div id="content">
			<div <?php if($_POST["error"] != "error"){echo "style='display:none'";}?> id="error">
				<p> You need to choose a valid user in order to play the game! </p>
			</div>
			<form action="datatest2.php" method="post">
				<fieldset>
					<legend> Player Setup </legend>
					<p> Name </p>
					<input type="text" name="name" placeholder="Your Name"/>
					<hr/>
					<p> Skin </p>
					<input type="text" name="img" placeholder="An Image URL"/>
					<hr/>
				</fieldset>
				<fieldset>
					<legend> Join </legend>
					<p> Room 1: </p>
					<input name="user" type="radio" id="r0" value="0"/><span id="s0">" Slot 1 </span><br/>
					<input name="user" type="radio" id="r1" value="1"/><span id="s1">" Slot 2 </span><br/>
					<input name="user" type="radio" id="r2" value="2"/><span id="s2">" Slot 3 </span><br/>
					<input name="user" type="radio" id="r3" value="3"/><span id="s3">" Slot 4 </span><br/>
					<input name="user" type="radio" id="r4" value="4"/><span id="s4">" Slot 5 </span><br/>
					<input name="user" type="radio" id="r5" value="5"/><span id="s5">" Slot 6 </span><br/>
					<input name="user" type="radio" id="r6" value="6"/><span id="s6">" Slot 7 </span><br/>
					<input name="user" type="radio" id="r7" value="7"/><span id="s7">" Slot 8 </span><br/>
					<input name="user" type="radio" id="r8" value="8"/><span id="s8">" Slot 9 </span><br/>
					<input name="user" type="radio" id="r9" value="9"/><span id="s9">" Slot 10 </span><br/>
					<input style="display:none;" name="user" type="radio" id="r0" value="-1" checked />
				</fieldset>
				<input type="submit" value="Join Game">
			</form>
			<button onclick="clearall()">
				clear
			</button>
		</div>
	</body>
</html>
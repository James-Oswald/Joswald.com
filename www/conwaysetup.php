
<!DOCTYPE html>
<html>
	<head>
		<?php include "mainhead.php";?>
		<title> Conway Setup </title>
		<link rel="stylesheet" type="text/css" href="/css/conway.css"/>
		<script>
			function updatedisplay()
			{
				document.getElementById("inc").innerHTML = document.getElementById("incin").value;
				document.getElementById("inc2").innerHTML = document.getElementById("incin").value;
				document.getElementById("wl").innerHTML = document.getElementById("wlin").value;
			}
		</script>
	</head>
	<body>
		<?php include "main.php";?>
		<br/>
		<div id="content">
			<fieldset>
				<legend> Information </legend>
				<p> 
					Welcome To Conway's Game of Life, Jozwald's JavaScript + HTML Canvas Edition <br/>
					This game only works on computers at the moment and is not mobile suporeted 
					(due to phones not suporting HTML5 canvases).<br/><br/>
					If you want to learn more about Conway's Game of Life
					<a href="https://en.wikipedia.org/wiki/Conway%27s_Game_of_Life">Click Here</a>.<br/><br/>
					If you for some odd reason know javascript and want to help me perfect this page,
					you can go about veiwing the page source code in the normal way, or 
					<a href="view-source:/conway.php">Clicking Here</a>.
				</p>
			</fieldset>
			<form oninput="updatedisplay()" action="conway.php" method="post" enctype="multipart/form-data">
				<fieldset>
					<legend> Board Setup </legend>
					<p> Board Incriment in Pixels </p>
					5<input id="incin" name="inc" type="range" value="10" min="5" max="20"/> 20
					<br/>
					<p>
						Length of all sides of the game board in boxes of <span id="inc2"></span><br/>
					</p>
					5<input id="wlin" name="widlen" type="range" value="50" min="5" max="100"/>100
					<p>
						Incriment:<span id="inc"></span><br/>
						Size in boxes:<span id="wl"></span>
					</p>
					<input type="submit" value="Create Board"/>
				</fieldset>
			</form>
		</div>
		<script>
			updatedisplay();
		</script>
	</body>
</html>
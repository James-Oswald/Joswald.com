<!DOCTYPE html>
<html>
	<head>
		<?php include "mainhead.php";?>
		<title> Conway's Game Of Jozwald </title>
		<link rel="stylesheet" type="text/css" href="/css/conway.css"/>
		<script type="text/javascript">
		
			function drawlines()
			{
				var inc = graphIncriment;
				var canvas = document.getElementById("md");
				var dobj = canvas.getContext("2d");
				for(i = 0; i < graphHeight; i += inc)
				{
					dobj.beginPath();
					dobj.lineWidth = "1px";
					dobj.strokeStyle = "#cccccc";
					dobj.moveTo(i,0);
					dobj.lineTo(i, graphHeight);
					dobj.stroke();
				}
				for(i = 0; i < graphWidth; i += inc)
				{
					dobj.beginPath();
					dobj.lineWidth = "1px";
					dobj.strokeStyle = "#cccccc";
					dobj.moveTo(0,i);
					dobj.lineTo(graphWidth, i);
					dobj.stroke();
				}
			}
			
			//universal display board
			function displayc(array)
			{
				console.log("Display has been entered");
				var canvas = document.getElementById("md");
				var dobj = canvas.getContext("2d");
				for (i = 0; i < heightInBoxes; i++)
				{
					for (j = 0; j < widthInBoxes; j++)
					{
						x = i * graphIncriment;
						y = j * graphIncriment;
						dobj.beginPath();
						dobj.rect(x, y, graphIncriment, graphIncriment);
						if (array[i][j] == 2)
						{
							dobj.fillStyle = "blue";
						}
						else if (array[i][j] == 1)
						{
							dobj.fillStyle = "grey";
						}
						else if (array[i][j] == 0)
						{
							dobj.fillStyle = "white";
						}
						dobj.fill();
					}
				}
				drawlines();
			}
			
			//begin tracking arrays
			function newArrayDimention(arguments)
			{
				console.log("NewArrayDimention has been entered");
				for (i = 0; i < widthInBoxes; i++)
				{
					arguments[i] = new Array(widthInBoxes);	
				}
			}
			
			function emptyarray()
			{
				for (i = 0; i < heightInBoxes; i++)
				{
					for (j = 0; j < widthInBoxes; j++)
					{
						init[i][j] = 0;
						next[i][j] = 0;
					}
				}
				for (i = 0; i < heightInBoxes; i++)
				{
					if ((i == 0) || (i == widthInBoxes - 1))
					{
						for (j  = 0; j < widthInBoxes; j++)
						{
							init[i][j] = 2;
						}
					}
				}
				for (i = 0; i < heightInBoxes; i++)
				{
					for (j  = 0; j < widthInBoxes; j++)
					{
						if ((j == 0) || (j == heightInBoxes - 1))
						{
							init[i][j] = 2;
						}
					}
				}
				gen = 0;
				document.getElementById("gen").innerHTML = "Generation: " + gen;
			}
			
			function displaythat()
			{
				displayc(init);
			}
			
			function updatearrayloging()
			{
				if (otatpc == 0)
				{
					otatpc = 1;
				}
				else
				{
					otatpc = 0;
				}
			}
			
			//build click handling
			function printarray(arguments)
			{
				var outstring;
				for (i = 0; i < widthInBoxes; i++)
				{
					outstring = "";
					for (j = 0; j < heightInBoxes; j++)
					{
						outstring += arguments[i][j];
					}
					console.log(outstring);
				}
			}
			
			function placeblock(event)
			{
				var canvas = document.getElementById("md");
				var dobj = canvas.getContext("2d");
				var xstart;
				var ystart;
				var axpos;
				var aypos;
				var rect = canvas.getBoundingClientRect();
				var x = event.clientX - rect.left;
				var y = event.clientY - rect.top;
				console.log("init: " + x + " " + y);
				for (i = 0; i < graphWidth; i += graphIncriment)
				{
					if(x <= i)
					{
						xstart = i - graphIncriment;
						break;
					}
				}
				for (i = 0; i < graphHeight; i += graphIncriment)
				{
					if(y <= i)
					{
						ystart = i - graphIncriment;
						break;
					}
				}
				console.log("square: " + xstart + " " + ystart + " " + (xstart + graphIncriment) + " " + (ystart + graphIncriment));
				axpos = xstart / graphIncriment;
				aypos = ystart / graphIncriment;
				if (init[aypos][axpos] != 2)
				{
					if (init[axpos][aypos] == 0)
					{
						init[axpos][aypos] = 1;
						dobj.beginPath();
						dobj.rect(xstart, ystart, graphIncriment, graphIncriment);
						dobj.fillStyle = "grey";
						dobj.fill();
					}
					else if (init[axpos][aypos] == 1)
					{
						init[axpos][aypos] = 0;
						dobj.beginPath();
						dobj.rect(xstart, ystart, graphIncriment, graphIncriment);
						dobj.fillStyle = "white";
						dobj.fill();
					}
				}
				drawlines();
				if (otatpc == 1)
				{
					printarray(init);
				}
			}

			//play functions and play event handling
			function nextto(init, x, y)
			{
				var c = 0;
				if ((x != 0) && (y != 0) && (x != heightInBoxes - 1) && (y != widthInBoxes - 1))
				{
					if (init[x - 1][y - 1] == 1)
					{
						c++;
					}
					if (init[x + 1][y + 1] == 1)
					{
						c++;
					}
					if (init[x + 1][y - 1] == 1)
					{
						c++;
					}
					if (init[x - 1][y + 1] == 1)
					{
						c++;
					}
					if (init[x][y - 1] == 1)
					{
						c++;
					}
					if (init[x][y + 1] == 1)
					{
						c++;
					}
					if (init[x - 1][y] == 1)
					{
						c++;
					}
					if (init[x + 1][y] == 1)
					{
						c++;
					}
				}
				return c;
			}
			
			function dies(state, neighbors)
			{
				if (state == 1)
				{
					if ((neighbors == 2) || (neighbors == 3))
					{
						return false;
					}
					else
					{
						return true;
					}
				}
				else 
				{
					if (neighbors == 3)
					{
						return false;
					}
					else
					{
						return true;
					}
				}
			}
			
			function nextday(init,next)
			{
				var neighbors;
				var dead;
				for (i = 0; i < heightInBoxes; i++)
				{
					for (j = 0; j < widthInBoxes; j++)
					{
						neighbors = nextto(init, i, j);
						dead = dies(init[i][j], neighbors);
						if ((dead == true) && (init[i][j] != 2))
						{
							next[i][j] = 0;
						}
						else if (init[i][j] != 2)
						{
							next[i][j] = 1;
						}
						else
						{
							next[i][j] = 2;
						}
					}
				}
				for (i = 0; i < heightInBoxes; i++)
				{
					for (j  = 0; j < widthInBoxes; j++)
					{
						init[i][j] = next[i][j];
					}
				}
			}
			
			function genup()
			{
				gen++;
				document.getElementById("gen").innerHTML = "Generation: " + gen;
			}

			function step()
			{
				nextday(init,next);
				displayc(init);
				genup();
			}
			
			//lapseing functions
			function forlapse(c, rot, tim)
			{
				if(stop != true)
				{
					console.log("Lapse Cycle = " + c);
					if (c < rot)
					{
						c++;
						step();
						setTimeout(function(){forlapse(c, rot, tim);}, tim);
					}
				}
				else
				{
					stop = false;
				}
			}
			
			function dolapse(tim)
			{
				if(stop != true)
				{
					step();
					setTimeout(function(){dolapse(tim);}, tim);
				}
				else
				{
					stop = false;
				}
			}
			
			function startforlapse()
			{
				var rot = document.getElementById("esf1").value;
				var tim = document.getElementById("esf2").value;
				var c = 0;
				console.log(rot + " " + tim);
				forlapse(c, rot, tim);
			}
			
			function startdolapse()
			{
				var tim = document.getElementById("esf3").value;
				dolapse(tim);
			}
			
			function stoplapse()
			{
				stop = true;
			}
			
			
		</script>
	</head>
	<body>
		<?php include "main.php";?>
		<br/>
		<div id="content">
			<fieldset>
				<legend> Control Panel </legend>
				<button onclick="step()">
					Step
				</button>
				<button onclick="emptyarray(); displaythat();">
					Clear
				</button>
				<form>
					<input onclick="updatearrayloging()" type="checkbox"/> Log ternary canvas cell array to page console?
				</form>
				<!--<form oninput="updateinc();">
					 box size in pixels: <br/>
					5<input id="esf4" type="range" min="5" max="20"/>20
					<p>Curently at: <span id="incout">10</span></p>
				</form>-->
				<form>
					<fieldset>
						<legend> For Lapse Settings </legend>
						Cycles to Preform:
						<input id="esf1" type="number" max="1000" value="10"/>
						Step Interval (In milliseconds):
						<input id="esf2" type="number" max="10000" value="1000"/>
					</fieldset>
				</form>
				<button onclick="startforlapse();">
					Begin For Lapse
				</button>
				<button onclick="stoplapse();">
					Stop For Lapse
				</button>
				<br/>
				<form>
					<fieldset>
						<legend>Do Lapse Settings </legend>
						Step Interval (In milliseconds):
						<input id="esf3" type="number" max="10000" value="100"/>
					</fieldset>
				</form>
				<button onclick="startdolapse();">
					Begin Do Lapse
				</button>
				<button onclick="stoplapse();">
					Stop Do Lapse
				</button>
				<br/>
				<br/>
				<a href="/conwaysetup.php"> 
					<button>
						Change Board Size
					</button>
				</a>
				<p id="gen">Generation: 0</p>
			</fieldset>
			<br/>
		</div>
		<div id="memes">
			<script type="text/javascript">
				//resizeing and canvas loading functions
				
				function submasterload(cfrom)
				{
					emptyarray();
					if (cfrom == 0)
					{
						var child = document.getElementById("md");
						child.parentNode.removeChild(child);
						buildcanvas();
					}
					displayc(init);
				}
				
				function masterload(pur)
				{
					graphIncriment = <?php echo $_POST["inc"];?>;
					heightInBoxes = <?php echo $_POST["widlen"];?>;
					widthInBoxes = <?php echo $_POST["widlen"];?>;
					graphHeight = ((graphIncriment * heightInBoxes) + heightInBoxes); 
					graphWidth = ((graphIncriment * widthInBoxes) + widthInBoxes);
					stop = false;
					otatpc = 0;
					gen = 0;
					if (pur == 1)
					{
						init = new Array(heightInBoxes);
						next = new Array(heightInBoxes);
						newArrayDimention(init);
						newArrayDimention(next);
						submasterload(1);
					}
				}
				
				function updateinc()
				{
					var inc = document.getElementById("esf4").value;
					document.getElementById("incout").innerHTML = inc;
					graphIncriment = inc;
					masterload(0);
				}
				
				function buildcanvas()
				{
					var maincanvas = document.createElement("canvas");
					var holder = document.getElementById("memes");
					maincanvas.id = "md";
					maincanvas.setAttribute("onclick", "placeblock(event)");
					maincanvas.width = graphWidth;
					maincanvas.height = graphHeight;
					maincanvas.innerHTML = "Your Browser Is Crap b/c it cant suport the canvas tag.";
					holder.appendChild(maincanvas);
				}
				
				//set varibles for creating the canvas
				masterload(0);
				buildcanvas();
			</script>
		</div>
		<script type="text/javascript">
			masterload(1);
		</script>
		</br>
	</body>
</html>
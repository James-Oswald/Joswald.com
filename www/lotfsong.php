<!DOCTYPE html>
<html>
	<head>
		<?php include "mainhead.php";?>
		<title> LOTF Song </title>
		<link rel="stylesheet" type="text/css" href="/css/lotf.css"/>
		<script>
			var lyrics = 'sharp like the point of a hunters spear. The hunters spear cuts through pig flesh and bone. though i don’t give into it, the evil urges have been released. missing the comforts of home, civility gets harder to find. oh yes, I have to help my fellow island dwellers. no less, build huts of earth, gather water, and light a rescue fire. These tasks compose a magnum opus. my modus operandi is democracy. Littleuns packed tight at night as they sleep. In my hand, a conch, a sign of what we should believe in. the ultimate goal is getting home, not hunting. at odds with the majority in a time when we should be in harmony. a peaceful loner, a single command of a dictator makes a the loner die. wonder why we participated with that clan. We followed our human instincts and didn’t have a plan. some days, some nights. some live, some die. On the island of the lord of the flies. some fight, some bleed. sun up to sun down. the prey of the beast. some days, some nights. some live, some die. On the island of the lord of the flies. some fight, some bleed. sun up to sun down. the prey of the beast. look, just at the barbarians around him. A bloody painted face on their leader. he might be a boy but he kills like a lion. he to the beast, the evil inside of him. I witness above all to have experienced this, homesickness on the island of wickedness. set sail to home, no looking back. From the far east to the wild west, The question "Are humans inherently evil?" stands the test of time for the chosen english class to find the best of noble minds to answer. some days, some nights. some live, some die. On the island of the lord of the flies. some fight, some bleed. sun up to sun down. the prey of the beast. some days, some nights. some live, some die. On the island of the lord of the flies. some fight, some bleed. sun up to sun down. the prey of the beast';
			msg = new SpeechSynthesisUtterance(lyrics);
			
			function sing()
			{
				window.speechSynthesis.speak(msg);
			}
			
			function stopthat()
			{
				var audio = document.getElementById("beat");
				audio.pause();
				audio.load();
				window.speechSynthesis.cancel(msg);			
			}
			
			function startthat()
			{
				test = new SpeechSynthesisUtterance("Testing Testing One Two Three");
				window.speechSynthesis.speak(test);
				setTimeout(function()
				{
					var audio = document.getElementById("beat");
					audio.volume = 0.25;
					audio.play();
					setTimeout(function(){ sing() }, 17000);
				}, 2000);
			}
		</script>
	</head>
	<body>
		<?php include "main.php";?>
		<div id="content">
			<div id="container">
				<div class="cusbut" onclick="startthat()">
					<p>Click Here To begin the show!</p>
				</div>
				<div class="cusbut" onclick="stopthat()">
					<p>Click Here To stop the show.</p>
				</div>
			</div>
			<audio id="beat" style="display:none;">
				<source src="/filebin/lotf.mp3" type="audio/mpeg">
			</audio>
			<h1> Prey Of The Beast </h1>
			<h3> By James Oswald </h3>
			<p> Based off of "Battlecry" by Nujabes </p>
			<br/>
			<p id = "lyrics">
				sharp like the point of a hunter's spear<br/>
				The hunter’s spear cuts through pig flesh and bone<br/>
				though i don’t give into it, the evil urges have been released<br/>
				missing the comforts of home, civility gets harder to find<br/> 
				oh yes, I have to help my fellow island dwellers<br/>
				no less, build huts of earth, gather water, and light a rescue fire<br/>
				These tasks compose a magnum opus <br/>
				my modus operandi is democracy <br/>
				Littleuns packed tight at night as they sleep<br/>
				In my hand, a conch, a sign of what we should believe in<br/>
				the ultimate goal is getting home, not hunting <br/>
				at odds with the majority in a time when we should be in harmony<br/>
				<br/>
				a peaceful loner,  <br/>
				a single command of a dictator makes a the loner die<br/>
				wonder why we participated with that clan<br/>
				We followed our human instincts instincts and didn’t have a plan <br/>
				<br/>
				some days, some nights <br/>
				some live, some die <br/>
				On the island of the lord of the flies<br/>
				some fight, some bleed <br/>
				sun up to sun down <br/>
				the prey of the beast<br/>
				<br/>
				some days, some nights <br/>
				some live, some die <br/>
				On the island of the lord of the flies<br/>
				some fight, some bleed <br/>
				sun up to sun down <br/>
				the prey of the beast<br/>
				<br/>
				look, just at the barbarians around him <br/>
				A bloody painted face on their leader  <br/>
				he might be a boy but he kills like a lion<br/>
				he to the beast, the evil inside of him <br/>
				I witness above all to have experienced this, <br/>
				homesickness on the island of wickedness <br/>
				set sail to home, no looking back <br/>
				<br/>
				From the far east to the wild west <br/>
				The question "Are humans inherently evil?"  stands the test of <br/>
				time for the chosen english class to find the best of noble minds to answer<br/>
				<br/>
				some days, some nights <br/>
				some live, some die <br/>
				On the island of the lord of the flies<br/>
				some fight, some bleed <br/>
				sun up to sun down <br/>
				the prey of the beast<br/>
				<br/>
				some days, some nights <br/>
				some live, some die <br/>
				On the island of the lord of the flies<br/>
				some fight, some bleed <br/>
				sun up to sun down <br/>
				the prey of the beast<br/>
			</p>
		</div>
		<br/>
		<br/>
	</body>
</html>
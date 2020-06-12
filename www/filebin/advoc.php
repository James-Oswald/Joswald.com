<!DOCTYPE html>
<html>
	<head>
		<?php include "mainhead.php";?>
		<link rel="stylesheet" type="text/css" href="/css/advoc.css"/>
		<title> Advocacy Project </title>
		<script>
			function dupe()
			{
				open("/rekt.html");
			}
		</script>
	</head>
	<body>
		<?php include "main.php";?>
		<div id="content">
			<h1>
				Advocacy Project
			</h1>
			<h3>
				Computer Malware
			</h3>
			<p class="left">
				What Is Malware?
				<br/><br/>
				Malware is short for malicious software. Malware is any computer program used to harm others or others property.
				This can include breaking their computer, stealing passwords, spying, or any other undesirable actions.
				Malware is an umbrella term used to describe both client side malware (such as viruses and spyware)
				and operator malware (DDOS prompts and Rainbow Tables).
				<br/><br/>
				Some common types of client malware are:
			</p>
			<ul class="left">
				<li> Computer Virus </li>
				<p> 
					A computer virus is named so because it acts just like the orginism it is named after.
					it infects its host and replicates by any means it can. Typically a virus will be a container
					for more advanced forms of malware such as botnet seeders, backdoors, rootkits, spyware, or trojan horses.
					Viruses will do whatever it takes to replicate themselves including system modification (with rootkits)
					or sending emails to others with your name and an attachment to trick others into opening viruses(Trojan Horses).
					<br/><br/>
					Example: (WARNING: has potental to crash your web browser)
				</p>
				<button onclick="dupe()"> Begin virus propogation </button>
				<hr/>
				<li> Trojan Horses </li>
				<p>
					A Trojan Horse is a means of misleading a user to believe a program is one thing when it is really something else.
					The name originates from the Trojan Horse built by the Greeks in 500bc to trick the Trojans into bringing them into
					their city. The most common type of Trojan Horse is the fake email with a file attached saying  "Look at these cool photos,
					Just download this file!". Another type of trojan horse is the misleading internet advertisement saying, "You just won $1000000,
					Click here to redeem!".
					<br/><br/>
					Example:
				</p>
				<a href="/prank.txt" download="Hax.txt">
					<img width="30%" height="10%" src="http://i0.kym-cdn.com/photos/images/list/000/910/858/af6.gif">
				</a>
				<hr/>
				<li> Rootkits </li>
				<p> 
					A rootkit is a script placed in a virus alongside another peice of malware to hide it. The rootkit will modify
					the user's system in order to do anything it can to prevent the malicious software from being discoverd. This includes
					hiding programs from task manager, and copying them to multiple locations incase one copy is discoverd and removed. The
					name "Rootkit" is derived from "Root" the name of the most powerful or highest level of a system obhect/user, and "kit"
					a set of tools, i.e. a set of tools meant to manipulate the systems roots.
				</p>
				<hr/>
				<li> Backdoors </li>
				<p>
					A backdoor is a way into a system without the normal authentication process. Someone with a backdoor is able to manipulate
					the user's system and depending on how good of a backdoor it is, may even have more control over your computer than you do! 
					Backdoors can enable someone to edit files, steal passwords, stalk the user, or even download more malware!
					Sometimes backdoors are pre installed onto a computer before it's even bought. Many computer manufacturers will hide backdoors
					in their computers to allow for things like password recovery and maintenance if you need to send your computer in to be fixed.
					This sounds like a good thing, but don't be fooled, once a backdoor is discovered and released, no computer with that backdoor
					is safe from hackers.
				</p>
				<hr/>
				<li> Spyware </li>
				<p>
					Spyware short for spying software, is a nefarious software used to stalk/spy on the user of a system or gather data from the
					system itself. Spyware features include remote webcam access, Microphone access and screencapping features. System spyware 
					is also able to see every keystroke you type and send it back to the distributer. Spyware is often bundled with Backdoors
					to allow full manipulation of another's computer.
					<br/><br/>
					Example:
				</p>
				<iframe width="560" height="315" src="https://www.youtube.com/embed/Q7G3kKRdUl4?t=19m10s" frameborder="0" allowfullscreen>
					Your Browser dont suport iframes kid.
				</iframe>
			</ul>
			<p class="left">
				Some common types of operation malware:
			</p>
			<ul class="left">
				<li> DOS (Denial of Service Attack) </li>
				<p>
					A Denial of Service (DOS) attack is when a person uses the network their computer belongs too, to attempt to deny service to
					others, typically that of an internet site, by rapidly "Pinging" the service provider as fast as they can. A Distributed denial
					of service attack (DDOS)  is a coordinated group of DOSs that are carried out simultaneously by a well conated group of users
					or a massive operation carried out by a botnet.
					<br/><br/>
					Example:
				</p>
				<a href="/filebin/Joz DDOS.exe" download="JozDOS.exe">
					<button> Download JozDOS </button>
				</a>
				<hr/>
				<li> Rainbow Tables </li>
				<p>
					Rainbow tables are super complex precomputed tables that contain instructions on the most efficient ways for a computer to guess
					passwords.
				</p>
				<hr/>
				<li> Botnets </li>
				<p>
					A botnet is a bunch of viruses distributed by a control system. An infected computer is called a "Zombie". Zombies have 2 jobs,
					spread the virus and do what the control system orders it. Zombies are typically made for distributed processing for massive
					group DDOS in which hundreds of thousands of computers assault a single target with the intent of taking it down. Or massive
					group password cracking efforts in which the control system instructs all of its zombies to attempt to crack a password.
				</p>
			</ul>
		</div>
	</body>
</html>
<!doctype html>
<html>
	<head>
	<meta charset="UTF-8";
	<meta name="viewport" content="width=device-width" />
	<title> Fun with Css3 and Responsive Layouts</title>
	<link href='http://fonts.googleapis.com/css?family=Sancreek' rel='stylesheet' type='text/css'>
	<link href="css/index.css" rel="stylesheet" />
	
	<!--[if lt IE 9]>
		<script src="javascript/html5shiv.js"></script>
	<![endif]-->
	</head>

	<body>
		<div class="pageWrapper">
			<header>
				<nav class="clear">
					<ul>
						<li><a href="#">scale up</a></li>
						<li><a href="#">scale down</a></li>
						<li><a href="#">rotate</a></li>
						<li><a href="#">skew</a></li>
					</ul>
				</nav>
				<h1> css3 all the fun at the fair</h1>
			</header>
			
			<div class="contentWrapper">
				<!-- sidebar -->
				<aside class="sidebarOne">
					<h2>Tomorrow starts with today, yesterday was much better</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>
					<p> <img src="images/mouse.jpg" alt="mouse" /></p>
					<h3>What A lovely mouse!</h3>
					<p>For mouse recipes go to the BBC website, alternatively grill on a low heat for upto an hour or until the squeeking stops.</p>
					<h3>Just kidding, Rat tastes much better</h3>
					<p>Rat recipes: RatOvan, a rat run over by a van. Ratatouille, two rats run over by a van.</p>
				</aside>
				<!-- main Content -->
				<article class="main">
					<h2>Is it just an amazing coincidence that I overtook a DeLorean on the motorway?</h2>
					<p><img src="images/meercat.jpg" alt ="a meer cat not a meerkat" /></p>
					<p>A bather whose clothing was strewed,</p>
					<p>winds that left her quite nude,</p>
					<p>Saw a man come along,</p>
					<p>And unless we are wrong,</p>
					<p>You expected this line to be lewd.</p>
					<h3><img src="images/llama.jpg" alt="llama in pjamamaamas"/>Expect the unexpected, I know I did</h3>
					<!--
					<p><form action="#" method="post" name="llamaForm" class="formInput">
						To be filled in later
						<input type="submit" name="submit" value="GO!"/>
					</form></p>
					-->
					<h3>Wont you be a darling and pass me a towel</h3>
					<p>The Church has had its problems of late with God refusing to allow sacrificing of children. This has created an uproar in schools as teachers are now forced to do work.</p>
				</article>
				<!-- sidebar two -->
				<aside class="sidebarTwo">
					<h2>Look the other way it is much nicer to the west</h2>
					<p>Important things to remember</p>
					<ul>
						<li>The Moon is made out of the sound old people make when they lose at bingo</li>
						<li>Counting the numbers in Pi is a good way to get to sleep</li>
						<li>Counting the numbers in Tau is much quicker</li>
						<li>You will never be as good a Shakespear as you cannot grow such a marvelous beard</li>
						<li>Do you really think being the Queen is a good job?</li>
					</ul>
					<h3>I was told as a kid that they would turn into NINJAS</h3>
					<img src="images/turtles.jpg" alt="mutant turtles" width="100px"/>
					<p>Can&#39t stop these radical dudes</p>
					<p>The secret of the ooze made the chosen few</p>
					<p>Emerge from the shadows to make their move</p>
					<p>The good guys win and the bad guys lose</p>
				</aside>
			</div>
			<footer>
				<p>&#169;<?=date("d/m/Y") ?> The big nosem little knikers group</p>
				<p>If you wish to talk to some one, there are many good books in the local library that will teach you how</p>
				<p>Email me your suggestions at <a href="notgoingnowhere@fast.com">go-on@dareyou.com</a></p>
			</footer>
		</div>	
	</body>
</html>

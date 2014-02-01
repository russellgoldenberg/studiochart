<?php include 'header.php' ?>
	<body>
    	<div class='container'>
		<!-- nav -->
			<div class='row'>
			<div class='sixteen columns'>
				<h1 class='logo'><a href='/'>studioCHART</a></h1>
				<ul class='nav'>
					<li>
						<a href='/about'>about</a>
					</li>
					<li>
						<a href='/design'>design</a>
					</li>
					<li>
						<a href='/build'>build</a>
					</li>
					<li>
						<a href='/grow'>grow</a>
					</li>
				</ul>
			</div>
			</div>
			<!-- end nav -->
			<div class='row'>
		<div class='sixteen columns'>
			<div class='slider'>
				<a href='design/'><img src='img/test.jpg'></a>
				<a href='build/' class='hide'><img src='img/test.jpg'></a>
				<a href='grow/' class='hide'><img src='img/test.jpg'></a>
			</div>
			<div id='controls'>
				<a href='#'>&FilledSmallSquare;</a>
				<a href='#'>&EmptySmallSquare;</a>
				<a href='#'>&EmptySmallSquare;</a>
			</div>
		</div>
			</div>
		</div>
		<script src='/js/libs/jquery-2.0.3.min.js' type='text/javascript'></script>
		<script src='/js/studiochart.js' type='text/javascript'></script>
	</body>
</html>
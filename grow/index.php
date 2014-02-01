<?php include '../header.php' ?>
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
							<a href='/grow' class='currentPage'>grow</a>
						</li>
						<li>
							<a href='http://blog.studiochart.com/' target='_blank'>blog</a>
						</li>
					</ul>
				</div>
			</div>
			<!-- end nav -->

			<div class='row'>
				<div class='sixteen columns projects'>
					<ul>
						<li><a href='#'>anchor organics</a></li>
						<li><a href='#'>bees</a></li>
						<li><a href='#'>tomatoes</a></li>
						<li><a href='#'>farm to table</a></li>
					</ul>
				</div>
			</div>
			<?php include '../projects-template.php' ?>
		</div>
		<div class='start' data-project='anchor organics'></div>
		<div class='dir' data-directory='grow'></div>
		<script src='http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js'></script>
		<script src='/js/grow-projects.js' type='text/javascript'></script>
		<script src='/js/projects.js' type='text/javascript'></script>
    </body>
</html>
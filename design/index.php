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
							<a href='/design' class='currentPage'>design</a>
						</li>
						<li>
							<a href='/build'>build</a>
						</li>
						<li>
							<a href='/grow'>grow</a>
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
						<li><a href='#'>market</a></li>
						<li><a href='#'>minimart</a></li>
						<li><a href='#'>ninety house</a></li>
						<li><a href='#'>ecopop</a></li>
						<li><a href='#'>little pond</a></li>
						<li><a href='#'>birdhouse</a></li>
						<li><a href='#'>live-work</a></li>
						<li><a href='#'>dirt church</a></li>	
					</ul>
				</div>
			</div>
			<?php include '../projects-template.php' ?>
		</div>
		<div class='start' data-project='market'></div>
		<div class='dir' data-directory='design'></div>
		<script src='http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js'></script>
		<script src='/js/design-projects.js' type='text/javascript'></script>
		<script src='/js/projects.js' type='text/javascript'></script>
    </body>
</html>
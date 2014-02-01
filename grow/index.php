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
					</ul>
				</div>
			</div>
			<!-- end nav -->

			<div class='row'>
				<div class='sixteen columns projects'>
					<ul>
						<li><a href='#' data-project='project'>project</a></li>
						<li><a href='#' data-project='project'>project</a></li>
						<li><a href='#' data-project='project'>project</a></li>
						<li><a href='#' data-project='project'>project</a></li>
						<li><a href='#' data-project='project'>project</a></li>
						<li><a href='#' data-project='project'>project</a></li>
					</ul>
				</div>
			</div>
			<div class='row'>
				<div class='five columns detailText'>
					<h4 class='projectTitle'>
						Project Title
					</h4>
					<div class='info'>
						<p>
							Smaller details about a specific project will go here. It will explain what the project was for, what it was about, etc, etc.  It could go into a bit more detail.
						</p>
						<p>
							It could be split into multiple paragraphs if there was enough information that needed to be passed.
						</p>
					</div>
				</div>
				<div class='eleven columns projectImage'>
					<img src='/img/test.jpg'>
				</div>
			</div>
		</div>
		<script src='/js/libs/jquery-2.0.3.min.js' type='text/javascript'></script>
		<script src='/js/design-projects.js' type='text/javascript'></script>
		<script src='/js/design.js' type='text/javascript'></script>
    </body>
</html>
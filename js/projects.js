(function() {
	
	var _cur = 0;

	$('.projects li a').on('click', function(e) {
		e.preventDefault();

		var project = $(this).text();
		loadProject(project);

		return false;
	});

	var loadProject = function(project) {
		if(_cur !== project) {
			_cur = project;
			//display text and images of current project
			$('.projectTitle').text(project);

			var projectData = project.replace(/ /g,'-');
			
			var infoHTML = '';
			for(var i = 0; i < _projects[projectData].info.length; i++) {
				infoHTML += '<p>' + _projects[projectData].info[i] + '</p>';
			}
			$('.projectInfo').empty().html(infoHTML);
			
			var imgHTML = '';
			for(var p = 1; p < _projects[projectData].img + 1; p++) {
				imgHTML += '<p><img src="/img/' + dir + '/' + projectData + p + '.jpg"></p>';
			}
			$('.projectImage').empty().html(imgHTML);
		}
	};

	var start = $('.start').attr('data-project'),
		dir = $('.dir').attr('data-directory');
	loadProject(start);
})();

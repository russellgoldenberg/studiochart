(function() {
	
	var _cur;


	$('.projects li a').on('click', function(e) {
		e.preventDefault();

		var project = $(this).attr('data-project');

		if(_cur !== project) {
			_cur = project;
			//display text and images of current project
			$('.projectTitle').text(project);
			
			var infoHTML = '';
			for(var i = 0; i < _projects[project].info.length; i++) {
				infoHTML += '<p>' + _projects[project].info[i] + '</p>';
			}
			$('.info').html(infoHTML);
			
			var imgHTML = '';
			for(var p = 0; p < _projects[project].img.length; p++) {
				imgHTML += '<img src="' + _projects[project].img[p] + '.jpg">';
			}
			$('.projectImage').html(imgHTML);
		}

		return false();
	});
})();

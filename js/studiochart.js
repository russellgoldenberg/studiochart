(function() {
	var _cur = 0,
		_transition = false;

	$('#controls a').on('click', function(e) {
		e.preventDefault();

		var index = $(this).index();

		//switch if different
		if(_cur !== index && !_transition) {
			var $curImage = $('.slider a').eq(_cur),
				$nextImage = $('.slider a').eq(index);

			_transition = true;

			$curImage.animate({opacity: 0}, function() {
				$(this).css('display', 'none');
				$('#controls a').eq(_cur).html('&EmptySmallSquare;');
				$('#controls a').eq(index).html('&FilledSmallSquare;');
				$nextImage.css('display', 'inline').animate({opacity: 1}, function() {
					_cur = index;
					_transition = false;
				});
			});
		}

		return false;
	});

})();
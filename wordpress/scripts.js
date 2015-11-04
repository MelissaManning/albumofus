$ = $ || jQuery;
$(function() {
	var w = $(window),
		img = $('.banner-image img'),
		imageWidth = null,
		imageHeight = null,
		aspectRatio = null;
	if (img.length > 0) {
		img.load(function() {
			imageHeight = img.height();
			imageWidth = img.width();
			aspectRatio = imageWidth / imageHeight;
			toolbelt.runWindowResizeEvents();
		});
		toolbelt.addEventOnWindowResize(function() {
			if (toolbelt.exists(aspectRatio)) {
				//window aspect ratio greater than image aspect ratio means we need to size based on width
				var imgCssHeight = 'auto',
					imgCssWidth = 'auto';
				if (w.width() / w.height() > aspectRatio) {
					imgCssWidth = w.width() + 'px';
				} else {
					imgCssHeight = w.height() + 'px';
				}
				img.css({
					'height': imgCssHeight,
					'width': imgCssWidth,
					'top': (w.height() - img.height()) / 2,
					'left': (w.width() - img.width()) / 2
				});
			}
		});
	}
	w.load(function() {
		toolbelt.runWindowResizeEvents();
		$('body').css({ opacity: 1 });
		toolbelt.runWindowResizeEvents();
		//it's a hack, but whatevs, i hate dealing with loading times
		setInterval(function() {
			toolbelt.runWindowResizeEvents();
		}, 1000);
	});
});
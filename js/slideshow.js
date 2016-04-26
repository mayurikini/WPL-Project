var createSlideshow = function(slideshowElem, duration) {
	var dur = duration || 5000;
	
	slideshowElem.each(function(){
		$(this).hide();
	});
	
	var elem = slideshowElem.first();
	elem.fadeIn("slow");	
	
	function imgfadeOut(){
		elem.fadeOut( "slow");
		if(elem.is(':last-child')){
			elem = slideshowElem.first();
		} else {
			elem = elem.next();
		}
		elem.fadeIn("slow");
	}
	
	var intervalOut = setInterval(imgfadeOut, dur);
		 
};

$(document).ready(function() {
			createSlideshow($('div.slideshow img'),2000);
});

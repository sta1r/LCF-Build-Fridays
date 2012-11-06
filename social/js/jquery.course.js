$(function() {
	
	// initialise tabs with history functionality
	$("#tab-buttons").tabs(".course-tab", { history: true });

	// re-position the old course links list to the bottom of the right sidebar
	$('.links').prepend($('#move-links').html());

	if ($('.image-container-scroll').find('.item').length < 2) {
	    $('#paginate, .image-container-scroll .nextPage, .image-container-scroll .prevPage').hide();
	} else {	
	    var api = $(".image-container-scroll .scrollable").scrollable({ size: 1, clickable: false, api: true });

	    // insert the pagination counter
	    var printIndex = api.getIndex() + 1;
	    $('#paginate').append(printIndex + " / " + api.getSize());

	    // update the pagination counter onSeek
	    api.onSeek(function(e, index) {
		var printIndex = index + 1;
		$('#paginate').empty().append(printIndex + " / " + this.getSize());
	    });
	}

	// initialise mini scrollables - revealing the arrows if there is overflow
	var mini = $('.mini');

	mini.each( function(i) {
		if ($(this).find('.item').length > 2) {
			$(this).parent().find('.next').removeClass('disabled');
			$(this).scrollable();
		}
	});
	
	// Facebook Share Pop-up
	if ($('.facebook-share-btn').length) {
		$('.facebook-share-btn').click(function(e) {
			var width  = 575,
			    height = 400,
			    left   = ($(window).width()  - width)  / 2,
			    top    = ($(window).height() - height) / 2,
			    url    = this.href,
			    opts   = 'status=1' +
			             ',width='  + width  +
			             ',height=' + height +
			             ',top='    + top    +
			             ',left='   + left;

			window.open(url, 'facebook', opts);

			return false;

		});
	}

});

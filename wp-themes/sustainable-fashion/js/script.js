/* Author: 

*/
jQuery(document).ready(function($) {
	
	//loadContent();
	
	$('.step-link').click(function(e) {
		url = $(this).attr('href');
		if (url == 'index.php') {
			return;
		} else {			
			e.preventDefault();
			$('.active').removeClass('active');
			content = $('#main-content');
			content.empty().append('<div id="loading">Loading...</div>');
			content.load(url, function() {
				$('#loading').hide();
			});
			$(this).parent().addClass('active');
		}
	});
	
	
	
	
});

/*function loadContent(url) {
	content = $('#main-content');
	content.empty().append('<div id="loading">Loading...</div>');
	if (url == undefined) {
		url = 'step-03';
		content.load(url, function() {
			$('#loading').hide();
		});
	} else {
		content.load(url, function() {
			$('#loading').hide();
		});
	}
}*/




/* Author: 
// this method is more elegant but repeat clicking on the links causes the steps to flicker between each other - not sure why

jQuery(document).ready(function() {
	
	loadContent();

});




function loadContent(url) {
	content = jQuery('#main-content');
	content.empty().append('<div id="loading">Loading...</div>');
	if (url == undefined) {
		url = jQuery('.step-link:first').attr('href');
		content.load(url, hijack);
	} else {
		content.load(url, hijack);
	}
}

function hijack() {
	jQuery('.step-link').click(function(e) {
		e.preventDefault();
		loadContent(e.target.href);
	});
	jQuery('#loading').remove();	
}

*/
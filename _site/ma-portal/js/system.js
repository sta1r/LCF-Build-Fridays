jQuery(document).ready(function($) {
	
// For additional Juitter config options, check the original download
$.Juitter.start({
		searchType:"searchWord", // needed, you can use "searchWord", "fromUser", "toUser"
		searchObject:"MA12,ma12,LCFLondon",
		live:"live-20",
		lang:"en",
		placeHolder:"live-tweets",
		loadMSG: "image/gif",
		imgName: "../img/ajax-loader.gif",
		total: 10,
		live: "live-20",
		readMore: "Read it on Twitter",
		nameUser:"image",
		openExternalLinks:"newWindow",
		filter:"sex->*censored*,porn->*censored*,fuck->*censored*,shit->*censored*,crap->*censored*,cunt->*censored*,wank->*censored*,tits->*censored*"
	});

	// Countdown
	$('#ticker').countdown({
		until: new Date(2012, 2 - 1, 2, 20, 00),
		onExpiry: liftOff,
		alwaysExpire: true
	});
	
	function liftOff() { 
	    $('#ticker').remove();
	}
	
});

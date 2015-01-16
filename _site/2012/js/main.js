/* Author: Alastair Mucklow, London College of Fashion */

$(function() {

		var target = window.location.hash;
		// if a hash is present in the URL, scroll to that tile		
    if(target) { $.scrollTo(target + '-tile', 200, { offset: -20 }); }
		
		// routing links to scroll between tiles		
		$('.router').click(function(e) {
			target = $(this).attr('href');
			$.scrollTo( target + '-tile', 600, { offset: -20, queue: false } );
			//if (!window.location.hash) { window.location.hash = target; }
		});
		
		// course pop-out lists
		$('.pop').click(function(e) {
			_pop = $(this);
			_pop.toggleClass('open').parent().next().toggle();
			if (_pop.hasClass('open')) { 
				_pop.html('[ - ]'); 
			} else {
				_pop.html('[+]');
			}
			e.preventDefault();
		});
		
		// generic toggler
		$('.toggle').click(function(e) {
			_elem = $(this).data('id');
			$('#' + _elem).toggle();
			e.preventDefault();		
		});
		
		// generic hoverer 
		$('.hover').hover(function() {
			_elem = $(this).data('id');
			$('#' + _elem).fadeIn('fast');
		}, function() {
			$('#' + _elem).fadeOut('slow');
		});
		
		// scroller
		$('.scroll').scrollable({ circular: true }).navigator().autoscroll(8000);
		
		// Check if the browser supports the video tag	
		var v = document.createElement("video"); 
	  	if ( !v.play ) { // If no, offer fallback links 
				$('.fallback').show();
			}	
			
		// For additional Juitter config options, check the original download
		if ($('#live-tweets').length > 0) {
			$.Juitter.start({
				searchType:"searchWord", // needed, you can use "searchWord", "fromUser", "toUser"
				searchObject:"LCF2012,lcf2012,LCFLondon",
				lang:"en",
				placeHolder:"live-tweets",
				loadMSG: "image/gif",
				imgName: "../img/ajax-loader.gif",
				total: 10,
				readMore: "Read it on Twitter",
				nameUser:"image",
				openExternalLinks:"newWindow",
				filter:"sex->*censored*,porn->*censored*,fuck->*censored*,shit->*censored*,crap->*censored*,cunt->*censored*,wank->*censored*,tits->*censored*"
			});
		}	

		// Countdown
		if ($('#ticker').length > 0) {
			$('#ticker').countdown({
				until: new Date(2012, 6 - 1, 28, 18, 30),
				onExpiry: liftOff,
				alwaysExpire: true
			});

			function liftOff() { 
				$('#ticker').remove();
			}
		}
		
		// Showtime JSON
		if ($('#showtime-json').length) {
		
			var container = $('#showtime-json ul');
			var limit = $('#showtime-json').data('limit');
			
			container.append('<div class="loader"/>');

      if (Modernizr.localstorage) {
        var profiles = localStorage.getItem("profiles");
        if (profiles != null) getShowtimeContent(JSON.parse(profiles));
				$.getJSON('http://showtime.arts.ac.uk/lcf/2012.json&limit=' + limit + '&callback=?', function(data) {
	        getShowtimeContent(data);
	        if (Modernizr.localstorage) localStorage.setItem("profiles", JSON.stringify(data));
	      });
			}
      
			function getShowtimeContent(data) {
   
				container.children().remove();
				//console.log('building new list');

			  var profiles = data.data.Profiles;
				var count = 0;

				$.each(profiles, function(i, profile) {
	
					count++;
					var string = '<div class="loader"/>';
					galleryThumb = profile.thumb;
					smlThumb = profile.thumb.split('gallery');
	
					// exclude profiles with an issuu embed as the main item - this fails
					if (smlThumb[0].indexOf('issuu') !== -1) {
						//console.log(smlThumb[0]);
						return;
					} else {
						smlThumb = smlThumb[0] + 'smlthumb.jpg';
					}
	
					profileUrl = 'http://showtime.arts.ac.uk/' + profile.profileName;

					string = '<li class="profile"><div class="profile-image"><a href="' + profileUrl + '" title="View ' + profile.fullName + ' on Showtime"><img src="' + smlThumb + '"></a></div>'
					// build the tooltip
					+ '<div class="tooltip top"><div class="arrow"></div><div class="tooltip-inner">'
					+ '<div class="tooltip-thumb"><a href="' + profileUrl + '" title="View ' + profile.fullName + ' on Showtime"><img src="' + galleryThumb + '"></a></div>' 
					+ '<h4>' + profile.fullName + '</h4>'
					+ '<p class="course-info">' + profile.course + '</p>'
					+ '<p class="section-purple"><a href="' + profileUrl + '">View profile</a></p></div></div>'
					+ '</li>';
	
					container.append(string);

				});

				// do not show tooltip on iOS (hover events don't work)
				if((navigator.userAgent.match(/iPhone/i)) || (navigator.userAgent.match(/iPod/i)) || (navigator.userAgent.match(/iPad/i))) {
					return; 
				} else {
					$("#showtime-json .profile-image").tooltip();	
				}

			}

		}	
		
});


function getMiniFeed(sender, uri) {
    $.getFeed({
        url: 'proxy.php?url=' + uri,
        success: function(feed) {
          var html = '';
          for(var i = 0; i < feed.items.length && i < 10; i++) {
						var item = feed.items[i];
            html += '<li>'
						//+ item.updated
						+ '– <a href="'
						+ item.link
						+ '">'
              			+ item.title
              			+ '</a></li>';
          	}
         	$(sender).append(html).show();
        }    
    });
}

if ($('.feed').length > 0) {
	getMiniFeed($("#news-tile ul"), 'http://blogs.fashion.arts.ac.uk/snapshot/tag/2012/feed/');
}


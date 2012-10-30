$(document).ready(function(){
	
	// Populate the 'static' areas of our template
	if ($('#populateWithJson').length > 0) {	

		$('span#name').html(dmitri.pupilName);
		$('span#nationality').html(dmitri.nationality);
		$('span#courseBA').html(dmitri.courseBA);
		$('span#gradYearBA').html(dmitri.gradYearBA);
		$('span#courseMA').html(dmitri.courseMA);
		$('span#gradYearMA').html(dmitri.gradYearMA);
		$('span#currentRole').html(dmitri.currentRole);
		$('span#currentJob').html(dmitri.currentJob);
		$('span#currentJobStartdate').html(dmitri.currentJobStartdate);
		$('span#currentJobStatus').html(dmitri.currentJobStatus);
		$('span#currentJobLocation').html(dmitri.currentJobLocation);
		$('span#currentJobLevel').html(dmitri.currentJobLevel);
		$('span#personalStatement').html(dmitri.personalStatement);

		// Loop through points of interest, build up our object DIV, and output to document... 	

		// Before loop starts, open a row

		for (var key in dmitri.pointsOfInterest) {

			var obj = dmitri.pointsOfInterest[key];
	
			var objHTML = '<div class="pointOfInterest'+key+'" style="border:1px solid red;margin-bottom:20px">';
	
			// Get a specific value
			var objHTML = objHTML + dmitri.pointsOfInterest[key].image;
	
			// Loops through anonymously
			for (var property in obj) {
				objHTML = objHTML + '<p>'+obj[property]+'</p>';
			}
		
			objHTML = objHTML + '</div>';
	
			$('.inner').append(objHTML);
	
		}
		
	}	
		
	// RSS FEEDS
    if ($('#network-feed').length > 0){
      $.getScript('js/jquery.rss.js', function() {
              //console.log('Application is starting.');
									$('#network-feed').rss("http://www.linkedin.com/rss/nus?key=SXrxQroRDDNr7nlJs1ZULy5Z5ptnnAQsBNTtoUJzXTKndhmyABoGmBhIWZTHA14s9v", {
          limit: 10,
					layoutTemplate: '<h3>Network updates on LinkedIn</h3><ul>{entries}</ul>',
          entryTemplate: '<li><div class="date">{date}</div><div class="link"><a href="{url}">{title}</a></div></li>'
          })
      });
    };

	// JOBS FEED
	if ($('#jobs-list').length > 0){
		$.getJSON('http://my.lcffirstmove.co.uk/jobs.json?callback=?', function( data ) {

				var output = '<table class="table table-striped"><thead><tr><th>Title</th><th>Location</th><th>Salary</th><th>Closing date</th></tr></thead><tbody>';
				var count = 5;
				var months = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];

				$.each(data, function(i, item) {

					if (i < count) {
						var job = data[i];
						var job_date = job.closes_on;
						var dt = new Date(job_date);

						output += '<tr>' 
						+ '<td>' + job.job_title + '</td>' 
						+ '<td>' + job.region + '</td>'
						+ '<td>' + job.salary + '</td>'
						+ '<td>' + dt.getDate() + ' ' + months[dt.getMonth()] + '</td>'
						+ '<td><button class="btn btn-info btn-small">View detail</button></td>'
						+ '<td><button class="btn btn-small" data-role="save-item">Save</button></td>'
						+ '<td><button class="btn btn-primary btn-small">Apply</button></td>'
						+ '</tr>';

						//console.log(data[i]);
					}
				});

				output += '</tbody></table>';

				$('#jobs-list').html(output);
				//console.log(output);
				
				// SAVE A THING
				$('[data-role="save-item"]').click(function(e) {
					_this = $(this);
					_container = _this.parent().parent();
					_container.toggleClass('saved');
					if (_container.is('.saved')) {
						_this.text('Saved');
					} else {
						_this.text('Save');
					}
				});
				
		});
	}
			    
	// TABS 
	$('#myTab a').click(function (e) {
	  e.preventDefault();
	  $(this).tab('show');
	});
	
	// SHOWTIME JSON
	if ($('#showtime-json').length){
		var feedUrl = $('#showtime-json').data('url');
		var limit = $('#showtime-json').data('limit');

		$.getJSON( feedUrl + '&limit=' + limit + '&callback=?', function(data) {

			$('.loader').hide();
			var container = $('#showtime-json');
			var outputNode = container.find('ul');
			var count = 0;
			var string = '';

			if (data.data.Student) { // this is a single Showtime profile
				var profileUrl = data.data.Student.Student.profileurl;
				var studentName = data.data.Student.Student.firstName + ' ' + data.data.Student.Student.lastName;
				var media = data.data.Student.Media;
			} 

			if (data.data.Profiles) { // this is a group of objects in Showtime
				var media = data.data.Profiles;
			}

			$.each(media, function(i, item) {
				count++;
				
				//console.log(item);
				
				// define smlThumb
				if (item.profile) {
					smlThumb = item.profile;
				} else {
					// for video and publication types, use a different field	
					if (item.type == 'video' || item.type == 'publication') {
						smlThumb = item.thumb;
					} else {
						smlThumb = item.thumb.split('gallery');
						smlThumb = smlThumb[0] + 'profile.jpg';
					}
				}

				if (item.profileName) { //group
					profileUrl = 'http://showtime.arts.ac.uk/' + item.profileName;
					studentName = item.fullName;
				}

				// do the loop
				string = '<li class="profile row add-bottom"><div class="profile-image span3"><a href="' + profileUrl + '" title="View ' + studentName + ' on Showtime"><img src="' + smlThumb + '"></a></div><div class="profile-desc span8"><p>' + item.title + '</p><p><i class="icon-heart"></i> Likes: <strong>6</strong></p></div><div class="span1 relative"><div class="edit-control"><a class="btn btn-primary btn-small">Edit</a></div></div></li>';	

				outputNode.append(string);

			});

		});
	}
	
	// EXPLANATORY POPOVERS
	/*$('#example').popover({
		html: 
	});*/
	
	// PUSH STUDENTS INTO TABLE ROWS
	if ($('#students-list').length) {
		
		var output = '<table class="table table-striped"><thead><tr><th>Name</th><th>Course</th><th>Interested in</th><th>Flag</th><th>Complete?</th></tr></thead><tbody>';
		
		for (i = 0; i < 10; i++) {
			
			output += '<tr><td>Dave Jones</td><td>BA Fashion Management</td><td>Retail Assistant, Burberry</td><td><i class="icon-flag"></i></td><td><label class="checkbox"><input type="checkbox"></label></td></tr>';
			
		}
		
		output += '</table>';
		
		$('#students-list').html(output);
		
		
	}
		
		
});

// We want to use external JSON, but having difficulties at the moment. So for now, we will define our data here:	
//	$.getJSON("dmitri.json&jsonp=parseResponse", function(data) {
//    	console.log(data);
//  });

var dmitri = {
		"pupilName":"Dimitri Stavrou",
		"nationality":"Cypriot",
		"courseBA":"BA Fashion Design and Technology: Menswear",
		"gradYearBA":2008, 
		"courseMA":"MA Fashion Design and Technology: Menswear", 
		"gradYearMA":2009,
		"currentRole":"Product Developer",
		"currentJob":"Roland Mouret",
		"currentJobLocation":"London",
		"currentJobStartdate":2010,
		"currentJobStatus":"F/T",
		"currentJobLevel":"Intermediate",
		"personalStatement":"Dimitri Stavrou made a real splash at this year&apos;s London Fashion Week. The young designer came out firing with a collection full of shimmering fabrics, fringes and trendy designs. The collection is absolutely brilliant. One look included a metallic gold trench coat that I would love to call my own. Dimitri Stavrou is definitely a designer to keep a close eye on in the years to come - Fashion Indie, 2009",
		"pointsOfInterest": [
			{
			"id":1,
            "type":"show",
            "name":"BA Runway 2008",
            "description":"Presentation of Graduate collections to press and fashion industry at the Royal Academy of Arts",
            "image":"dmitri1.jpg"
            },
            {
			"id":2,
            "type":"show",
            "name":"MA Runway 2009",
            "description":"Presentation of Post-Graduate collections to press and fashion industry at the Raphael Gallery, Victoria & Albert Museum",
            "image":"dmitri2.jpg"
            },
            {
			"id":3,
            "type":"press",
            "name":"Editorial, VOGUE.com (Sep 2010)",
            "description":"Dimitri won Collection of the Year, the first menswear collection to do so, with his unique take on men’s tailoring. It included half-suits mixed with mesh-draped panels which had a sporty feel about them in a vibrant palette of pink, green and blue.",
            "image":"vogue.jpg"
            },
            {
			"id":4,
            "type":"press",
            "name":"Editorial, Drapers (Nov 2011)",
            "description":"Featured as one of the top menswear designe graduates to watch. Drapers highlighted London as the hot spot for design pools. Full feature can be found on line.",
            "image":"drapers.jpg"
            },
             {
			"id":5,
            "type":"award",
            "name":"Deutchbank Award, 2010",
            "description":"Deutsche Bank launched the Deutsche Bank Awards for Creative Enterprises scheme in 1993 to offer practical and financial support to artists, craftspeople, designers and performers to start a business or carry out a project in that crucial year after leaving college. In 2012, we will have fifteen winners from thirteen of the UK's top arts colleges.",
            "image":"deutchbank.png"
            },
            {
			"id":6,
            "type":"award",
            "name":"MA Fashion Award, 2009",
            "description":"British designers and creatives are renowned for their ability to set the global fashion agenda.  Each year the British Fashion Awards celebrates their creativity and success. Established in 1989, the British Fashion Awards was born from the British Fashion Council’s then five-year-old Designer of the Year Award. For more than 20 years, the British Fashion Awards has been celebrating the contributions of British designers, creatives and models to the international fashion scene. Dimitri was 1 of 5 designers to receive the prestigous award.",
            "image":"bfa.jpg"
            },
            
        ],


	};
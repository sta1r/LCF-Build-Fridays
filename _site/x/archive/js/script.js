$(document).ready(function(){
	
	// Populate the 'static' areas of our template
		
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
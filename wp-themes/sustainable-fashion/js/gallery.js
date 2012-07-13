$("#carousel").jCarouselLite({
	btnNext: "#down",
	btnPrev: "#up",
	vertical: true,
	circular: false,
	visible: 4.5
});

countImages = function() {
	var pn = 1;
	$('#carousel ul li a').each(function(){
		pn++;
	});
	return pn-1;
};

countImages();

$('#carousel ul li a').click(function () {
	var newImg = $(this).attr("href");
	$('#album-details img').attr("src", newImg);
	
	currentImg = parseInt($('#carousel ul li a').index(this))+1;
	$('#album-details #image-counter').text(currentImg+'/'+countImages());
	
	return false;
});

$('#prev-image').mouseover(function() {
	$('#carousel ul li a').each(function () {
		if ($('#album-details img').attr("src") == $(this).attr("href")) {
			
			var newImg = $(this).parent('li').prev('li').find('a').attr("href");
			$('#album-details img').attr("src", newImg);
			
			currentImg = parseInt($('#carousel ul li a').index(this))+1;
			$('#album-details #image-counter').text(currentImg+'/'+countImages());
			
			return false;
		}
	});
});

$('#next-image').mouseover(function () {
	$('#carousel ul li a').each(function () {
		if ($('#album-details img').attr("src") == $(this).attr("href")) {
			
			var newImg = $(this).parent('li').next('li').find('a').attr("href");
			$('#album-details img').attr("src", newImg);
			
			currentImg = parseInt($('#carousel ul li a').index(this))+1;
			$('#album-details #image-counter').text(currentImg+'/'+countImages());
			
			return false;
		}
	});
});
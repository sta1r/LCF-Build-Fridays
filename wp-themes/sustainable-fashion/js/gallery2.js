$('.jcarousel-skin-tango').addClass('main-gallery');

var options = {
    insert : '#main-image-gallery',
    clickNext : true,
    onImage : function(image) {
        image.css('display','none').fadeIn(200);
        var top = ($('#gallery-left-col ').height() - $('#main-image-gallery').height()) / 2;
        //$('#main-image-gallery').css('margin-top', top);
    },
    onThumb : function() {}
};

$('ul.main-gallery').galleria(options);




// count total gallery items for pager
$("#image-total").html($("#gallerythmbs").children().size());
$("#image-num").html($("#gallerythmbs li.active").attr("jcarouselindex"));

$('#prev-image').click(function() { 
    $.galleria.prev();
    $("#image-num").html($("#gallerythmbs li.active").attr("jcarouselindex"));
});

$('#next-image').click(function() { 
    $.galleria.next();
    $("#image-num").html($("#gallerythmbs li.active").attr("jcarouselindex"));
});

$("#gallerythmbs li img").click(function(){
    $("#image-num").html($(this).parent('li').attr("jcarouselindex"));
});



$(".jcarousel-next-vertical").css({top: '348px'});

//urlG = window.location.href;
//newURL = urlG.split('#');
//$('#main-image-gallery').append('<img src="'+newURL[1]+'" alt=" " />');

//resize the image on image gallery
$('#main-image-gallery img').each(function(){
    $(this).load(function(){
        var maxWidth = $(this).width(); // Max width for the image
        var maxHeight = $(this).height();       // Max height for the image
        $(this).css("width", "auto").css("height", "auto"); // Remove existing CSS
        $(this).removeAttr("width").removeAttr("height"); // Remove HTML attributes
        var width = $(this).width();    // Current image width
        var height = $(this).height();  // Current image height

        if(width > height) {
            // Check if the current width is larger than the max
            if(width > maxWidth){
                var ratio = maxWidth / width;   // get ratio for scaling image
                $(this).css("width", maxWidth); // Set new width
                $(this).css("height", height * ratio);  // Scale height based on ratio
                height = height * ratio;        // Reset height to match scaled image
            }
        } else {
            // Check if current height is larger than max
            if(height > maxHeight){
                var ratio = maxHeight / height; // get ratio for scaling image
                $(this).css("height", maxHeight);   // Set new height
                $(this).css("width", width * ratio);    // Scale width based on ratio
                width = width * ratio;  // Reset width to match scaled image
            }
        }
        $(this).width() = ($(this).width() > 508)? "508px" : "auto";
    });
});
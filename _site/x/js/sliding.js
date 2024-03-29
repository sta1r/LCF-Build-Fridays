$(document).ready(resetSlidingDoors);

function resetSlidingDoors() {
 	
    //Custom settings
    var style_in = 'easeOutBounce';
    var style_out = 'jswing';
    var speed_in = 1000;
    var speed_out = 300;    
    
    //Calculation for corners
    var neg = Math.round($('.qitem').width() / 2) * (-1);   
    var pos = neg * (-1);   
    var out = pos * 2;
     
    $('.qitem').each(function () {
     
        //grab the anchor and image path
        url = $(this).find('a').attr('href');
        img = $(this).find('.sliding_img').attr('src');
        //img.css("width","500px");
         
        //remove the image
        $('.sliding_img', this).remove();
         
        //append four corners/divs into it
        $(this).append('<div class="topLeft cornerDiv"></div><div class="topRight cornerDiv"></div><div class="bottomLeft cornerDiv"></div><div class="bottomRight cornerDiv"></div>');	//altered code (added class 'cornerDiv')
         
        //set the background image to all the corners
        $(this).children('.cornerDiv').css('background-image','url('+ img + ')');	//altered code ('.cornerDiv')
 			//new code: set background image size to same as qitem (for both qitem and these new cornerDivs)
 			var myWidth = $(this).css('width');
 			var myHeight = $(this).css('height');
 			$(this).css('background-size', myWidth + ' '+myHeight);
 			$(this).children('.cornerDiv').css('background-size', myWidth+' '+ myHeight);       	
 
        //set the position of corners
        $(this).find('div.topLeft').css({top:0, left:0, width:pos , height:pos});   
        $(this).find('div.topRight').css({top:0, left:pos, width:pos , height:pos});    
        $(this).find('div.bottomLeft').css({bottom:0, left:0, width:pos , height:pos}); 
        $(this).find('div.bottomRight').css({bottom:0, left:pos, width:pos , height:pos});  
 
    }).hover(function () {
     
        //animate the position
        $(this).find('div.topLeft').stop(false, true).animate({top:neg, left:neg}, {duration:speed_out, easing:style_out}); 
        $(this).find('div.topRight').stop(false, true).animate({top:neg, left:out}, {duration:speed_out, easing:style_out});    
        $(this).find('div.bottomLeft').stop(false, true).animate({bottom:neg, left:neg}, {duration:speed_out, easing:style_out});   
        $(this).find('div.bottomRight').stop(false, true).animate({bottom:neg, left:out}, {duration:speed_out, easing:style_out});  
                 
    },
     
    function () {
 
        //put corners back to the original position
        $(this).find('div.topLeft').stop(false, true).animate({top:0, left:0}, {duration:speed_in, easing:style_in});   
        $(this).find('div.topRight').stop(false, true).animate({top:0, left:pos}, {duration:speed_in, easing:style_in});    
        $(this).find('div.bottomLeft').stop(false, true).animate({bottom:0, left:0}, {duration:speed_in, easing:style_in}); 
        $(this).find('div.bottomRight').stop(false, true).animate({bottom:0, left:pos}, {duration:speed_in, easing:style_in});  
     
    }).click (function () {
         
        //go to the url
        window.location = $(this).find('a').attr('href');   
    });
 
}
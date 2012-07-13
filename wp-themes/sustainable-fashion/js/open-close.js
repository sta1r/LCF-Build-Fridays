function initPage()
{
	var blocks = document.getElementsByTagName("li");
	for (var i=0; i<blocks.length; i++)
	{
		if (blocks[i].className.indexOf("roll") != -1)
		{
			if ( blocks[i].className.indexOf("close") == -1 ) blocks[i].className += " close";
			var links = blocks[i].getElementsByTagName("a");
		
				for (var k=0; k<links.length; k++) {
					
					if (links[k].className == "button") {
						
						
						links[k].onclick = function()
						{
							if ( this.parentNode.parentNode.className.indexOf("close") != -1 ) 
							{
								this.parentNode.parentNode.className = this.parentNode.parentNode.className.replace("close", "");
							}
							else
							{
								this.parentNode.parentNode.className += " close";
							}
							return false;
						}
				}
			}
		}
	}
	

}
/**
if (window.addEventListener){
	window.addEventListener("load", initPage, false);
}
else if (window.attachEvent){
	window.attachEvent("onload", initPage);
}
**/


function toggleDisplay(id)
{
	var newStyle = "none";
	
	if (document.getElementById(id).style.display == "none" || document.getElementById(id).style.display == "")
	{
		newStyle = "block";
	}
	
	document.getElementById(id).style.display = newStyle;
}


jQuery(document).ready(function($){
    //$(".student_uploads .form form label").after("<br/>");
	$('p.linklove').remove();
	

	// STUDENT UPLOAD FORM DETAILS
	$('#cf_uploadfile-10').after("<br/><em>pdf or Word; maximum 250 words</em>");
	$('#cf_uploadfile-11').after("<br/><em>pdf; maximum 8 pages</em>");
	
	
	$('#cf_uploadfile2-10').after("<br/><em>pdf or Word; maximum 250 words</em>");
	$('#cf_uploadfile2-11').after("<br/><em>pdf; maximum 8 pages</em>");
	$('#cf_uploadfile2-12').after("<br/><em>pdf or Word; maximum 2500 words</em>");
	
	
	$('#cf_uploadfile3-10').after("<br/><em>pdf or Word; maximum 250 words</em>");
	$('#cf_uploadfile3-11').after("<br/><em>pdf; maximum 8 pages</em>");
	$('#cf3_field_12').after("<br/><em>link to YouTube; maximum 30 minutes</em>");

	$('#cf_uploadfile4-10').after("<br/><em>pdf or Word; maximum 250 words</em>");
	$('#cf_uploadfile4-11').after("<br/><em>pdf or Word; maximum 250 words</em>");

	$('#cf_uploadfile5-10').after("<br/><em>pdf or Word; maximum 250 words</em>");
	$('#cf_uploadfile5-11').after("<br/><em>pdf format; maximum 8 pages</em>");
	$('#cf5_field_12').after("<br/><em>link to YouTube; maximum 30 minutes</em>");
	
	$('#cf_uploadfile6-10').after("<br/><em>pdf or Word; maximum 250 words</em>");
	$('#cf_uploadfile6-11').after("<br/><em>pdf or Word format; maximum 2500 words OR digital display of 1 piece of practical work</em>");
	$('#cf6_field_12').after("<br/><em>link to YouTube; maximum 30 minutes</em>");

	$('#cf_uploadfile7-10').after("<br/><em>pdf or Word; maximum 250 words with up to 8 sheets of visuals, as applicable</em>");
	$('#cf_uploadfile7-11').after("<br/><em>pdf or Word format; maximum 2500 words OR digital display of 1 piece of practical work</em>");
	$('#cf7_field_12').after("<br/><em>link to YouTube; maximum 30 minutes</em>");
	
	// GALLERY TWEAKER	
	$('.ngg-galleryoverview').before('<a href="javascript:toggleDisplay(\'page_gallery\');"><h3>Gallery</h3></a>');
	
	//$('.ngg-galleryoverview').wrap('<div id="page_gallery" style="display:none;"></div>');

	//initPage();
	
});
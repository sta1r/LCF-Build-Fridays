
var dropTarget = "#dropzone";
var zindex= 100;
var droppedObjects = new Array(); //stores IDs of dropped objects (postits)

//this is postit dropper function

function postitDrop(event){
	//set variables
	var oIndex = droppedObjects.length;
	var eventDateText =event.dateContent; // "27/08/2012";
	var eventTitle = event.textContent; //"London Fashion Week - Cinema Event";
	var postitID = "postit_" + event.eventID;
	var eventImg = event.eventImg;
	var eventInfo = event.eventInfo;
	
	var HTMLOfItemToDrop = "<div class='postit_div' id='"+ postitID +"'><div class='postit_crossout'><img class='postit_crossout_img' id='crossout_"+postitID+"' src='./img/pinboard/cross.png'></div><img class='postit_genre_img' src='./img/pinboard/cinema.png'><p><br/></p><img class='postit_event_img' src='"+eventImg+"'><div class='postit_text_div'><p class='postit_date'><b>"+eventDateText+"</b></p><p class='postit_title'>"+eventTitle+"</p><p class='postit_info'>"+eventInfo+"</p></div></div>";
	var itemToDrop = "#"+postitID;				//+oIndex;
	
	//add item to the target and update array
	$(dropTarget).append(HTMLOfItemToDrop);
	droppedObjects[droppedObjects.length] = itemToDrop;
	
	//make it at mouse position
	var o = {
            left: event.pageX-10,
            top: event.pageY-10
        };
    $(itemToDrop).offset(o);
    $(itemToDrop).draggable();	//make it draggable
		
	zindex = zindex+100;
	$(itemToDrop).css({'z-index':zindex});
	
	
	console.log("pageX = "+event.pageX+", pageY = "+event.pageY);
    console.log("offset => "+ $(itemToDrop).offset().left + ", "+$(itemToDrop).offset().top);

	
	//add delete postit handler etc
	$("#crossout_"+postitID).click(deletePostit);
	
	//hover
	$(itemToDrop).hover(onHoverPostit, onUnhoverPostit);
	
	//alert("Click recognised");
}

	//handlers
	function onHoverPostit(event){
		var tooltipPos = $("aside");	//seems less annoying than event.target?
		
		$(event.target).css({'cursor':'hand'});
		//note: tooltip is a div which is display:none by default, see styles in css/style.css
		var toolInfo = "<h4>"+$(this).find(".postit_date").text() + " - " + $(this).find(".postit_title").text() + "</h4> <p>"+$(this).find(".postit_info").text()+"</p>";
	
		$("#tooltip").stop(true, true).css({
                  top: $(dropTarget).position().top,
                  left: $(dropTarget).position().left + 20
            }).html(toolInfo).fadeIn('slow');
	}
	function onUnhoverPostit(event){
		$(event.target).css({'cursor':'pointer'});
		$("#tooltip").stop(true, true).fadeOut('slow');
	}
	 
	
	function deletePostit(event){
		if (confirm("Remove this from your pinboard?")){
			var postitID = event.target.getAttribute('id').substring(9);
			$("#"+postitID).remove();
		}
	}
	

/* ======*/

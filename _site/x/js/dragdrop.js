//default stuff
$(document).ready(function(){
								
								//hover
								$("#content li").hover(function(event){ $(event.target).css({'cursor':'hand'}); }, function(event){ $(event.target).css({'cursor':'pointer'}); })
									
							}
	);

  var internalDNDType = 'Text'; // set this to something specific to your site
  var dragged; //used for item in basket styling

  	
  function dragStartHandler(event) {
	
    if (event.target instanceof HTMLLIElement) {

      // use the element's data-value="" attribute as the value to be moving:
		
		
	   dragged = event.target;
	
		//send data as a delimited string
			//original code:
			//var valStr = event.target.textContent+"||"+event.target.getAttribute('data-value'); //use || as a serporater - commers no use as they might be used		//altered code:
		var valStr = $(event.target).find(".list_item_title").text()+"||"+event.target.getAttribute('data-value'); //use || as a serporater - commers no use as they might be used
		
			//new code: adding 'date' [and other?] info, gathered from spans of the same class within the target
			valStr +=("||"+event.target.getAttribute('event-date')+"||"+event.target.getAttribute('id')+"||"+event.target.getAttribute('event-img'));
			valStr +=("||"+ $(event.target).find(".list_item_info").text());
	  event.dataTransfer.setData(internalDNDType, valStr);
      event.effectAllowed = 'move'; // only allow moves
    } else {
      event.preventDefault(); // don't allow selection to be dragged
    }
  }

	 function dragEnterHandler(event) {
	    // cancel the event if the drag contains data of our type
	    if (event.dataTransfer.types.contains(internalDNDType)){
	      event.preventDefault();
		}
	  }
	
	  function dragOverHandler(event) {
	    event.dataTransfer.dropEffect = 'move';
	    event.preventDefault();
	
	    /* new code */
	    //$("dropzone").css
	  }
	
	  function dropHandler(event) {
	    // drop the data
		event.preventDefault();
		var dataV = event.dataTransfer.getData(internalDNDType);
		//split the delimited string into an array
		var det = dataV.split('||');
		// separate values into variables
		var titleValue = det[0];
		var dataValue = det[1];
		var eventDate = det[2];
		var eventID = det[3];	//the ID of the event eg 'event01'
		var eventImg = det[4];	//image for the event
		var eventInfo = det[5];	//text info for the event
		
		console.log("det = "+det);
		
		// check the DOM to see if the element already exsists
		if (document.getElementById("postit_"+eventID)) 		// ORIGINAL: dataValue+"-value"))
		{
			
			/* ORIGINAL SHOPPING CART CODE
			// if it exists then get its current value and add to it
			var num = document.getElementById(dataValue+"-value").textContent;
			var newVal = parseInt(num) + 1;
			document.getElementById(dataValue+"-value").textContent = newVal;
			*/
			
		} else {
		/* ORIGINAL SHOPPING CART CODE
		 // if it does not exists create it using the values sent in the drag and drop
	  	  var dt = document.createElement('dt');
		  var dd = document.createElement('dd');
		    
	
			dt.id = dataValue+"-title";
			dd.id = dataValue+"-value";
			dt.textContent = textValue;
			dd.textContent = '1';
	
			// add elements to the DOM
		    document.getElementById('dropzone').appendChild(dt);
			document.getElementById('dropzone').appendChild(dd);
			
			//add the class to the item dragged in to give user feedback
		  	dragged.className = 'in';
		  */	
		  	
		  	/* =======new code======= */
		  	
		  	//add postit note
		  		//first store all the data in the 'event' object
		  	event.textContent = titleValue;	//title
		  	event.dateContent = eventDate;
		  	event.eventID = eventID;
		  	event.eventImg = eventImg;
		  	event.eventInfo = eventInfo;
		  	postitDrop(event);
		  	
		
		}
		
		
		
	}

//window.onload = init;
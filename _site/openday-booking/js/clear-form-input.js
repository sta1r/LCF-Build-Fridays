function clearForm(formIdent) 
{ 
  var form, elements, i, elm; 
  form = document.getElementById 
    ? document.getElementById(formIdent) 
    : document.forms[formIdent]; 

	if (document.getElementsByTagName)
	{
		elements = form.getElementsByTagName('input');
		for( i=0, elm; elm=elements.item(i++); )
		{
			if (elm.getAttribute('type') == "text")
			{
				elm.value = '';
			}
		}
		elements = form.getElementsByTagName('textarea');
		for( i=0, elm; elm=elements.item(i++); )
		{
			elm.value = '';
		}
	}

	// Actually looking through more elements here
	// but the result is the same.
	else
	{
		elements = form.elements;
		for( i=0, elm; elm=elements[i++]; )
		{
			if (elm.type == "text")
			{
				elm.value ='';
			}
		}
	}
}
	
function addEvent(elm, strEvent, fnHandler)
{
	return ( elm.addEventListener
	? elm.addEventListener( strEvent, fnHandler, false)
	: elm.attachEvent( 'on'+strEvent, fnHandler)
	);
}
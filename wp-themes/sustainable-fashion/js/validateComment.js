function validateFormOnSubmit(theForm) {

	var reason = "";

  	reason += validateUsername(theForm.author);
  //	reason += validatePassword(theForm.pwd);
  	reason += validateEmail(theForm.email);
  //	reason += validatePhone(theForm.phone);
  //	reason += validateEmpty(theForm.from);
      
  	if (reason != "") {
    	alert("Some fields need correction:\n" + reason);
    	return false;
  	}

  	return true;
}

function validateEmpty(fld) {
    var error = "";
 
    if (fld.value.length == 0) {
        fld.style.background = 'Red'; 
        error = "The required field has not been filled in.\n"
    } else {
        fld.style.background = 'White';
    }
    return error;  
}

function validateUsername(fld) {
    var error = "";
    var illegalChars = /\W/; // allow letters, numbers, and underscores
    var illegalChars = /^[^a-zA-Z0-9 ]+$/; // allow letters, numbers, and underscores
 
 	/* Allow what I want what is opposite  /^[a-zA-Z0-9 ]+$/ */
 	
    if (fld.value == "") {
        fld.style.background = 'red'; 
        error = "You didn't enter a name.\n";
    } else if ((fld.value.length < 2) || (fld.value.length > 64)) {
        fld.style.background = 'red'; 
        error = "The name is the wrong length.\n";
    } else if (illegalChars.test(fld.value)) {
        fld.style.background = 'red'; 
        error = "The name contains illegal characters.\n";
    } else {
        fld.style.background = 'White';
    }
    return error;
}

function trim(s)
{
	return s.replace(/^\s+|\s+$/, '');
}

function validateEmail(fld) {
    var error="";
    var tfld = trim(fld.value);                        // value of field with whitespace trimmed off
    var emailFilter = /^[^@]+@[^@.]+\.[^@]*\w\w$/ ;
    var illegalChars= /[\(\)\<\>\,\;\:\\\"\[\]]/ ;
   
    if (fld.value == "") {
        fld.style.background = 'Red';
        error = "You didn't enter an email address.\n";
    } else if (!emailFilter.test(tfld)) {              //test email for illegal characters
        fld.style.background = 'Red';
        error = "Please enter a valid email address.\n";
    } else if (fld.value.match(illegalChars)) {
        fld.style.background = 'Red';
        error = "The email address contains illegal characters.\n";
    } else {
        fld.style.background = 'White';
    }
    return error;
}
    

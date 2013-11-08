<?php include('header.php'); ?>

<div id="inner-left"></div>				
<div id="inner-right">

<?php
	// include form security functions
	//	include('am_form_functions.php');
	
  	// create short variable names
  	$first_name=$_POST['first_name'];	
	$last_name=$_POST['last_name'];	
	$job_title=$_POST['job_title'];	
	$company=$_POST['company'];	
	$address1=$_POST['address1'];	
	$address2=$_POST['address2'];	
	$town_city=$_POST['town_city'];	
  	$postcode=$_POST['postcode'];
	$email=$_POST['email'];
	$telephone=$_POST['telephone'];
	$show=$_POST['show'];
	$attend=$_POST['attend'];	
	$guest_first_name=$_POST['guest_first_name'];
	$guest_last_name=$_POST['guest_last_name'];
	$guest_job_title=$_POST['guest_job_title'];
	$guest_email=$_POST['guest_email'];
	$guest_two_first_name=$_POST['guest_two_first_name'];
	$guest_two_last_name=$_POST['guest_two_last_name'];
	$guest_two_job_title=$_POST['guest_two_job_title'];
	$guest_two_email=$_POST['guest_two_email'];
	$invitee=$_POST['invitee'];		

	// check for missing data
  	if (!$first_name || !$last_name || !$email)
  	{ ?>
	
	
		<div id="error">
	     <h3>Whoops! You've forgotten some important stuff. Please fill out <span class="error">all required form fields</span>.</h3>
		</div>

	<? 
  	exit;
  
	// check the email address
  	/*} elseif (!isValidString($email) || !testEmail($email)) { ?>
	
		<div id="error">
	    	<h3>Whoops! There was a problem with your <span class="error">email address</span>.</h3>
				<h3>Please go back and try again.</h3>
		</div>	
	
<?
	exit;*/
	
	} else {

	include('db_connect.php');


	// enter values into the database
	$sql = "insert into responses values 
			(NULL, '".$first_name."', '".$last_name."', '".$job_title."', '".$company."', '".$address1."', '".$address2."', '".$town_city."', '".$postcode."', '".$email."', '".$telephone."', '".$show[0]."', '".$attend[0]."', '".$guest_first_name."', '".$guest_last_name."', '".$guest_job_title."', '".$guest_email."', '".$guest_two_first_name."', '".$guest_two_last_name."', '".$guest_two_job_title."', '".$guest_two_email."', '".$invitee."', NOW())";
	
	$result = mysql_query($sql, $db);
	
	if (!$result) {
		echo 'DB error, could not query the DB: ' . mysql_error();
		exit;
	} 
	
	mysql_close($db);
?>

<div id="responsedata">

	<p>Thank you for registering your RSVP for the LCF 2009 BA catwalk show.</p>  

<?php
	// set mail headers for mail to respondents
	$headers = 'From: London College of Fashion <events@fashion.arts.ac.uk>' . "\r\n" .
    'Reply-To: events@fashion.arts.ac.uk' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
?>

<!-- message 1 -->
<?php if ($attend[0] == 'Yes - I am attending') { ?>

	<p>Your name has been added to our guest list and we look forward to seeing you at Flower Cellars on Thursday 4 June 2009. Please arrive promptly, you will be asked to sign in on arrival at the venue:</p>
	<p><strong>4 – 6 Russell Street<br/>London<br/>WC2B 5HZ<br/>(Nearest tube: Covent Garden)</strong</p> 
	
<?php

	$message = "Thank you for registering your RSVP for the LCF 2009 BA catwalk show.\n\nYour name has been added to our guest list and we look forward to seeing you at Flower Cellars on Thursday 4 June 2009. Please arrive promptly, you will be asked to sign in on arrival at the venue:\n\n4 - 6 Russell Street, London, WC2B 5HZ (Nearest tube: Covent Garden)\n\nWith kind regards\n\nThe Events Office\nLondon College of Fashion";
	
	mail($email, 'LCF BA Show 2009: Thank you for registering', $message, $headers);
	?>

<?php } ?>

<!-- message 2 -->
<?php if ($attend[0] == 'Yes plus guests') { ?>

	<p>Your names have been added to our guest list and we look forward to seeing you and your guests at Flower Cellars on Thursday 4 June 2009. Please arrive promptly, you will be asked to sign in on arrival at the venue:</p>
	<p><strong>4 – 6 Russell Street<br/>London<br/>WC2B 5HZ<br/>(Nearest tube: Covent Garden)</strong</p>

<?php

	$message = "Thank you for registering your RSVP for the LCF 2009 BA catwalk show.\n\nYour names have been added to our guest list and we look forward to seeing you at Flower Cellars on Thursday 4 June 2009. Please arrive promptly, you will be asked to sign in on arrival at the venue:\n\n4 - 6 Russell Street, London, WC2B 5HZ (Nearest tube: Covent Garden)\n\nWith kind regards\n\nThe Events Office\nLondon College of Fashion";
	
	mail($email, 'LCF BA Show 2009: Thank you for registering', $message, $headers);
	?>
	
<?php } ?>

<!-- message 3 -->
<?php if ($attend[0] == 'No plus guests') { ?>

	<p>We are sorry you are unable to attend but look forward to seeing your guest(s) at at Flower Cellars on Thursday 4 June 2009. Please arrive promptly, you will be asked to sign in on arrival at the venue:</p>
	<p><strong>4 – 6 Russell Street<br/>London<br/>WC2B 5HZ<br/>(Nearest tube: Covent Garden)</strong</p>
	
<?php

	$message = "Thank you for registering your RSVP for the LCF 2009 BA catwalk show.\n\nWe are sorry you are unable to attend but  look forward to seeing your guest(s) at at Flower Cellars on Thursday 4 June 2009. Please arrive promptly, you will be asked to sign in on arrival at the venue:\n\n4 - 6 Russell Street, London, WC2B 5HZ (Nearest tube: Covent Garden)\n\nWith kind regards\n\nThe Events Office\nLondon College of Fashion";
	
	mail($email, 'LCF BA Show 2009: Thank you for registering', $message, $headers);
	?>
	
<?php } ?>

<!-- message 4 -->
<?php if ($attend[0] == 'Not attending - no guests') { ?>

	<p>We are sorry you are unable to attend, but hope to see you at future events.</p>
	
<?php

	$message = "Thank you for registering your RSVP for the LCF 2009 BA catwalk show.\n\nWe are sorry you are unable to attend, but hope to see you at future events.\n\nWith kind regards\n\nThe Events Office\nLondon College of Fashion";
	
	mail($email, 'LCF BA Show 2009: Thank you for registering', $message, $headers);
	?>		
	
<?php } ?>

<p>With kind regards</p>

<p>The Events Office<br/>
London College of Fashion</p>

		<div id="reload">
			<p><a href="index.php">Reload the form</a></p>
		</div>
		
		<ul id="list-folding" class="images">

			<li>

			<a href="http://www.fashion.arts.ac.uk/events/gradex.htm"><img width="51" height="51" alt="MA show catwalk thumbnail" src="http://www.fashion.arts.ac.uk/images/AM_MA001_mini.jpg"/></a>

			<a href="http://www.fashion.arts.ac.uk/events/gradex.htm"><span>Graduate Exhibition 2009</span></a><br/><span class="bodycopy">Industry days and an online showcase for this year's graduates.</span></li>
		</ul>
		
</div><!-- #responsedata -->
 
<?php

	// set mail headers for form manager email
	$headers = 'From: MA2009 Registration Form <webmaster@example.com>';

	
	// send an email to the form manager
	$message = "Registration for MA_STERS 2009\nName: ".$first_name." ".$last_name."\nJob title: ". $job_title. "\nCompany: " . $company . "\nEmail: ". $email. "\nGuest 1: ". $guest_first_name. " " . $guest_last_name. "\nGuest 2: " . $guest_two_first_name. " " . $guest_two_last_name;

	mail('events@fashion.arts.ac.uk', 'MA_STERS Registration', $message, $headers);
	
	}
	 ?>

	</div><!-- #inner-right -->
	
	
	<div class="clear"></div>

	
<?php include('footer.php'); ?>
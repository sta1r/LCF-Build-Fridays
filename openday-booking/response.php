<?php 
$page="booking";
$title="All done!";
// set mail headers for mail to respondents
$headers = 'From: London College of Fashion <opendays@fashion.arts.ac.uk>' . "\r\n" .
  'Reply-To: opendays@fashion.arts.ac.uk' . "\r\n" .
  'X-Mailer: PHP/' . phpversion();
include('header.php'); 

// create short variable names
$opendaydate=$_POST['opendaydate'];
$first_name=$_POST['first_name'];	
$last_name=$_POST['last_name'];	
$email=$_POST['email'];
$telephone=$_POST['telephone'];
$guest=$_POST['guest'];
$interest=$_POST['interest'];
$course_level=$_POST['course_level'];
$study_mode=$_POST['study_mode'];
$optout=$_POST['optout'];


// generate a subject list string for course choices containing multiple checkbox selections
function getList($array) {
	$the_list = '';
	$i = 0;
	
	foreach ($array as $list_item) {
		if ($i == 0) {

			$the_list = $list_item;

		} else {

			$the_list = $the_list.', '.$list_item;

		}

		$i++;
	}
	
	$array = $the_list;
	return $array;
	
}

$interest_list = getList($interest);
$course_level_list = getList($course_level);
$study_mode_list = getList($study_mode);

// check for missing data if JS validation isn't working or can't function
if (!$first_name || !$last_name || !$email)
{ ?>
	<div id="inner-left" class="fail"></div>				
	<div id="inner-right">
		<div id="error">
	     <h3>Whoops! You've forgotten some important stuff. Please fill out all required form fields.</h3>
		</div>
	</div>
	
	</div><!-- #inner-right -->
	<div class="clear"></div>
<? 
exit;

} else {

// connect to the db
include('db_connect.php');

// enter values into the database
$sql = "insert into lcfopenday0910 values 
		(NULL, '".$first_name."', '".$last_name."', '".$email."', '".$telephone."', '".$opendaydate[0]."', '".$guest[0]."', '".$course_level_list."', '".$study_mode_list."', '".$interest_list."', '".$optout."', NOW())";

$result = mysql_query($sql, $db);

if (!$result) {
	echo 'DB error, could not query the DB: ' . mysql_error();
	exit;
}

// count the db rows and email the owner 
global $num_rows;
$row_check = "SELECT * FROM lcfopenday0910";
$new_result = mysql_query($row_check, $db);
if (!$new_result) { echo 'DB function error, could not query the DB: ' . mysql_error(); }
    else {
        $num_rows = mysql_num_rows($new_result);
        $emailfrequency = 20; // 20
        if ($num_rows % $emailfrequency == 0) {
					// get the email stuff
					require('emails.php');
					mail($ownerEmail, $ownerSubject, $ownerMessage, $headers);
					}
    }

mysql_close($db);
?>

<div id="inner-left" class="success"></div>				
<div id="inner-right" class="success">

<div id="responsedata">
<?php 
include('responsedata.php');
include('success.html'); 
?>
</div><!-- #responsedata -->

</div><!-- #inner-right -->

<div class="clear"></div>

<?php
// construct the email
$subject = 'LCF Open Days - '.$first_name.' '.$last_name.' - Your Booking';
// send the email
mail($email, $subject, $message, $headers);
?>


<?php } // end if good data conditional ?>

<?php include('footer.php'); ?>
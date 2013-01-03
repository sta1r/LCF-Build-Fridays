<?php
    // disable any caching by the browser
    header('Expires: Mon, 14 Oct 2002 05:00:00 GMT');              // Date in the past
    header('Last-Modified: ' . gmdate("D, d M Y H:i:s") . ' GMT'); // always modified
    header('Cache-Control: no-store, no-cache, must-revalidate');  // HTTP 1.1
    header('Cache-Control: post-check=0, pre-check=0', false);
    header('Pragma: no-cache');                                    // HTTP 1.0
    header("P3P: policyref=\"http://www.arts.ac.uk/w3c/p3p.xml\", CP=\"CURo DEVo HISo IND DSP ALL COR PHY ONL STA COM NAV INT DEM CNT\"");

    session_set_cookie_params(0 , '/', '.arts.ac.uk');
    if (isset($_REQUEST['session_name'])) {
        session_name($_REQUEST['session_name']);
    }
    session_start();
    
    $validsession = false;
    if (isset($_SESSION['pageid'])) { $validsession = true; }

    if(isset($_POST['fromsection'])) {$_SESSION['fromsection'] = $_POST['fromsection'];}
    if(isset($_POST['section']))  {$_SESSION['section'] = $_POST['section'];}
    $section = $_SESSION['section'];

    if ($section == 'reset') {
        $_SESSION = array();
        $_POST = array();
        $_GET = array();
        $validsession = false;
    }    

    if ($validsession) {
        $frm_successurl = $_SESSION['frm_successurl'];
        $frm_errorurl = $_SESSION['frm_errorurl'];
        $frm_formlocation = $_SESSION['frm_formlocation'];
        $frm_formtitle = $_SESSION['frm_formtitle'];

        $reserved_tablename = $_SESSION['reserved_tablename'];
        $reserved_department = $_SESSION['reserved_department'];
        $reserved_email = $_SESSION['reserved_email' ];
        $frm_emailFrequency = $_SESSION['emailfrequency' ];

        $frm_sendackemail = $_SESSION['frm_sendackemail'];
        $frm_replyaddr = $_SESSION['frm_replyaddr'];
        $frm_emailcontent = $_SESSION['frm_emailcontent'];

        $arr_itemsToValidate = $_SESSION['arr_itemsToValidate']; //get list of items to validate (arr_itemsToValidate)

        $arr_formItems = $_SESSION['arr_formItems'];
        foreach ($_POST as $vname => $value) {
            if ($vname != 'section' && $vname != 'fromsection' && $vname != 'submitbutton' && $vname != 'session_name')
            { $arr_formItems[$vname] = $value; }
        }
        $_SESSION['arr_formItems'] = $arr_formItems;
  
        $arr_formErrors = array();    //empty the errors array
 
        include 'fieldvalidation.php';
        anyErrors();
        $_SESSION['arr_formErrors'] = $arr_formErrors;

        //check that no more than 5 openday choices have been selected
        $opendaycount = 0;
        $opendayexists = "no";
        foreach ($arr_formItems as $vname => $value) {
            if (substr($vname, 0, 8) == 'openday_') {
                $opendayexists = "yes";
                if (is_array($value)) {
                    if (!empty($value[0])) {  $opendaycount++; }
                }
                elseif (!empty($value)) {  $opendaycount++; }
            }
            if ($opendaycount == 6) {
                $arr_formErrors[] = array("field" => "generalerror", "msg" => "Please choose up to 5 open days only");
                $_SESSION['arr_formErrors'] = $arr_formErrors;
                break;  
            }
        }
        if (empty($opendaycount) && $opendayexists == "yes") {
            $arr_formErrors[] = array("field" => "generalerror", "msg" => "Please choose at least one open day");
            $_SESSION['arr_formErrors'] = $arr_formErrors;
        }

        $usingbookingsys = $_SESSION['bookingsys'];
        //init variables for cochrane booking
        if (isset($_GET['showid'])) {$frm_showid = $_GET['showid'];} else {$frm_showid = 0;}
        if (isset($_GET['showdate'])) {$frm_showdate = $_GET['showdate'];} else {$frm_showdate = "";}
        if (isset($arr_formItems['t_qty1'])) {$tq1 = trim($arr_formItems['t_qty1']);} else {$tq1 = 0;}
        if (isset($arr_formItems['t_qty2'])) {$tq2 = trim($arr_formItems['t_qty2']);} else {$tq2 = 0;}
        if (isset($arr_formItems['t_qty3'])) {$tq3 = trim($arr_formItems['t_qty3']);} else {$tq3 = 0;}
        if (isset($arr_formItems['t_qty4'])) {$tq4 = trim($arr_formItems['t_qty4']);} else {$tq4 = 0;}
        if (isset($arr_formItems['t_qty5'])) {$tq5 = trim($arr_formItems['t_qty5']);} else {$tq5 = 0;}
        if (isset($arr_formItems['t_qty6'])) {$tq6 = trim($arr_formItems['t_qty6']);} else {$tq6 = 0;}
        if (isset($arr_formItems['t_qty7'])) {$tq7 = trim($arr_formItems['t_qty7']);} else {$tq7 = 0;}
        if (isset($arr_formItems['t_qty8'])) {$tq8 = trim($arr_formItems['t_qty8']);} else {$tq8 = 0;}
        if (isset($arr_formItems['t_qty9'])) {$tq9 = trim($arr_formItems['t_qty9']);} else {$tq9 = 0;}
        if (isset($arr_formItems['t_qty10'])) {$tq10 = trim($arr_formItems['t_qty10']);} else {$tq10 = 0;}

        include_once 'emailfunctions.php';

        //if section = continue and no errors, calc final ticket cost
        if ($section == 'continue' && empty($arr_formErrors)) {
            //Check to see if at least 1 qty has been entered - if all are 0 then none was selected
           if ($tq1==0 && $tq2==0 && $tq3==0 && $tq4==0 && $tq5==0 && $tq6==0 && $tq7==0 && $tq8==0 && $tq9==0 && $tq10==0) {
            //add the error 'please enter a ticket qty'
            $arr_formErrors[] = array("field" => "generalerror", "msg" => "Please enter a ticket quantity");
            $_SESSION['arr_formErrors'] = $arr_formErrors;
           }
        }

        //if there are no errors and section == 'submit' then we are finished- save to db/email user and redirect to success
        if (empty($arr_formErrors) && $section == 'submit') {
            //if no errors and end reached then form is complete.


            //prepare data for db
            $newarray = array();
            foreach ($arr_formItems as $vname => $value) {
                //special code for LCF openday form
                if (substr($vname, 0, 8) == 'openday_') {
                    //first confirm it is of array type
                    if (is_array($value)) {
                      //now make sure its not empty
                      if (!empty($value[0])) {
                        //insert the value into the first available slot
                        if (!isset($newarray['openday1'])) {$newarray['openday1'] = $value[0];}
                        else if (!isset($newarray['openday2'])) {$newarray['openday2'] = $value[0];}
                        else if (!isset($newarray['openday3'])) {$newarray['openday3'] = $value[0];}
                        else if (!isset($newarray['openday4'])) {$newarray['openday4'] = $value[0];}
                        else if (!isset($newarray['openday5'])) {$newarray['openday5'] = $value[0];}
                      }
                    }
                }
                //the date template consists of 3 dropdowns: day, month, year. This code will join each into a single
                //string for saving to the db. all date fields will begin with 'dtm_' so it can be intercepted here.
                else if (substr($vname, 0, 4) == 'dtm_') { //if field name starts with 'dtm_' then treat as date
                    $varname = substr($vname, 4, strlen($vname)-1); //get the fieldname after 'dtm_'
                    if (empty($value[0]) && empty($value[1]) && empty($value[2])) { $dt = "";}
                    else {$dt = sprintf("%02d/%02d/%04d", $value[0], $value[1], $value[2]);} //build the date string
                    $newarray[$varname] = $dt; 
                }
                //if multiple checkboxes have been given the same name, php will put them in an array-
                //the code below will join each value into 1 string using a semicolon as separator-
                //(prob not a good idea)
                else if (is_array($value)) { //if array then must be checkboxes
                    $cbs = "";
                    for ($i=0; $i <= count($value)-1; $i++){
                        if ($cbs != "") {$cbs .= ";" . $value[$i];} else {$cbs = $value[$i];}
                    }    
                    $newarray[$vname] = $cbs; }
                else { $newarray[$vname] = $value; }
            }
            $arr_formItems = $newarray;

            include_once 'saveform.php';
            include_once 'emailfunctions.php';
            $duplicate = "";

            if (connectToDB($dbServer, $dbUsername, $dbPassword, $dbDatabase)) {                
                if (checkForDuplicates($reserved_tablename) == true) { //if there is a duplicate entry don't save
                    $duplicate = "yes";    }
                else { 
                    insertIntoDB($arr_formItems, $reserved_tablename, $frm_formtitle, $reserved_email);   
                }
                if (($str_outcome == "success") && ($duplicate == "")) {
                    $num_rows = 0;
                    if (checkForEmailAlert($frm_emailFrequency, $reserved_tablename)) {
                        $cochrane_email_content = "";
                        if (isset($usingbookingsys)) {
                            $cochrane_email_content = "Booking#: $num_rows\n";
                            $cochrane_email_content .= "Payment: ".$newarray['payment']."\n";
                            $cochrane_email_content .= "Show: ".$newarray['show_title'].", ";
                            $cochrane_email_content .= $newarray['show_date']."\n";
                            $cochrane_email_content .= "Seating: ".$newarray['seating']."\n";
                            $cochrane_email_content .= "Tickets: \n";      
                            $gtp = 0;//grand total price
                            for ($i = 1; $i <= 9; $i++) {
                                if (isset($newarray["t_type$i"]) && !empty($newarray["t_type$i"])) {
                                    $tti = $newarray["t_type$i"]; //ticket type
                                    $tqi = $newarray["t_qty$i"]; //ticket qty
                                    $tpi = $newarray["t_price$i"]; //ticket price
                                    $ttpi = $tqi * $tpi;   //total ticket price for this ticket type
                                    $gtp += $ttpi;     //add to grand total price
                                    $cochrane_email_content .= "  $tqi '$tti' ticket";
                                    ($tqi > 1) ? ($cochrane_email_content .= "s ") : ($cochrane_email_content .= " ");
                                    $cochrane_email_content .= "(£$tpi each)\n";
                                }
                            }
                            $cochrane_email_content .= "  Grand Total: £$gtp\n\n\n";       
       
                            $cochrane_email_content .= "Surname: ".$newarray['lastname']."\n";
                            $cochrane_email_content .= "First name: ".$newarray['firstname']."\n";
                            $cochrane_email_content .= "Address: ".$newarray['address']."\n";
                            $cochrane_email_content .= "Postcode: ".$newarray['postcode']."\n";
                            $cochrane_email_content .= "Telephone: ".$newarray['telephone']."\n";
                            $cochrane_email_content .= "Email: ".$newarray['email']."\n\n";       
       
                            $cochrane_email_content .= "Heard about: ".$newarray['heardabout']."\n";
                            $cochrane_email_content .= "Mailing list?: ";
                            (empty($newarray['mailinglist'])) ? ($cochrane_email_content .= "no") : ($cochrane_email_content .= "yes");
                            $cochrane_email_content .= "\n";
                            $cochrane_email_content .= "3rd party mailing list?: ";
                            (empty($newarray['othermailings'])) ? ($cochrane_email_content .= "no") : ($cochrane_email_content .= "yes");
                            $cochrane_email_content .= "\n\n\n";
       
                            //echo "<pre>";
                            //echo $cochrane_email_content; echo "</pre>";
                            //exit; 
                        }
                        emailOwner($frm_formtitle, $reserved_email, $num_rows, $reserved_tablename, $cochrane_email_content);
                    }
                }
            }
            
            if ($str_outcome == "success") {
                if (($frm_sendackemail == "on") && ($duplicate == "")) {
                    if (isset($arr_formItems['email'])) {
                        emailUser($frm_formtitle, $arr_formItems['email'], $frm_replyaddr, $frm_emailcontent);
                    }
                }
                //destroy session
                $_SESSION = array(); session_unset(); session_destroy();
                //redirect to success page
                header('Location: ' . $frm_successurl);
                exit;   //stop this script running
            }
            elseif ($str_outcome == "error") {
                emailAdmin("c.toppon@arts.ac.uk, b.caballero@arts.ac.uk", $frm_formlocation, $str_errors);
                //destroy session
                $_SESSION = array(); session_unset(); session_destroy();
                //redirect to error page
                header('Location: ' . $frm_errorurl);
                exit;   //stop this script running
            }
            else {
                emailAdmin("c.toppon@arts.ac.uk, b.caballero@arts.ac.uk", $frm_formlocation, $str_errors);
                //destroy session
                $_SESSION = array(); session_unset(); session_destroy();
                //not needed as session already destroyed? //session_write_close(); //close the lock on the session file
                //redirect to error page
                header('Location: ' . $frm_errorurl);
                exit;   //stop this script running
            }
        }
        else {
            if (isset($usingbookingsys)) {
                $getvars = "";
                if ($frm_showid > 0) {$getvars = "&showid=$showid";}
                if ($frm_showdate > 0) {$getvars .= "&showdate=$showdate";}
                if ($section == 'continue' || $section == 'submit') {
                    if (isset($tq1) && $tq1 > 0) { $getvars .= "&tq1=$tq1"; }
                    if (isset($tq2) && $tq2 > 0) { $getvars .= "&tq2=$tq2"; }
                    if (isset($tq3) && $tq3 > 0) { $getvars .= "&tq3=$tq3"; }
                    if (isset($tq4) && $tq4 > 0) { $getvars .= "&tq4=$tq4"; }
                    if (isset($tq5) && $tq5 > 0) { $getvars .= "&tq5=$tq5"; }
                    if (isset($tq6) && $tq6 > 0) { $getvars .= "&tq6=$tq6"; }
                    if (isset($tq7) && $tq7 > 0) { $getvars .= "&tq7=$tq7"; }
                    if (isset($tq8) && $tq8 > 0) { $getvars .= "&tq8=$tq8"; }
                    if (isset($tq9) && $tq9 > 0) { $getvars .= "&tq9=$tq9"; }
                    if (isset($tq10) && $tq10 > 0) { $getvars .= "&tq10=$tq10"; }
                    if ($section=='continue' && empty($arr_formErrors)) {$getvars .= "&tot=yes";}
                    else if ($section=='continue' && !empty($arr_formErrors)) {$getvars .= "&tot=no";}
                    if ($section=='submit' && empty($arr_formErrors)) {$getvars .= "&tot=yes&fin=yes";}
                    if ($section=='submit' && !empty($arr_formErrors)) {$getvars .= "&tot=yes&fin=no";}
                }
            }
            $tmp_sessionname = session_name();
            $tmp_sessionid = session_id();
            session_write_close();  //close the lock on the session file
            //redirect back to form
            header('Location: ' . $frm_formlocation . '?' . $tmp_sessionname . '=' . strip_tags($tmp_sessionid) . $getvars);
            exit;   //stop this script running
        }
    } //end if validsession
    else {
        session_write_close(); //close the lock on the session file
        header('Location: ' . $frm_formlocation);
        exit;   //stop this script running
    }
    exit;   //stop this script running (overkill?)
?>
 
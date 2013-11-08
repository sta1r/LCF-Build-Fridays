<?php
    //*email functions
    //email admin #(for errors) 
    function emailAdmin($adminEmail, $formpath, $ers) {
        $to = $adminEmail;
        $subject = "Error message from $formname"; 
        $body = "Hi,\n\nThe following errors occured when a form was submitted to $formpath:\n\n" . $ers;
        $fromheader = "From: $adminEmail\n";
        $fromheader .= "Reply-To: $adminEmail\n";
        if (mail($to, $subject, $body, $fromheader))
             {/*success*/}
        else {/*failure*/}
    }
    function debugtoadmin($data) {
        $to = 'c.toppon@arts.ac.uk';
        $subject = "Debug message"; 
        $body = "Data:\n\n$data\n\n";
        $fromheader = "From: c.toppon@arts.ac.uk\n";
        $fromheader .= "Reply-To: c.toppon@arts.ac.uk\n";
        if (mail($to, $subject, $body, $fromheader))
             {/*success*/}
        else {/*failure*/}
    }
    //email form owner #(with link to download)
    function emailOwner($formname, $ownerEmail, $subs_num, $tab_name, $email_content) {
        $to = $ownerEmail;
        //$headers  = "MIME-Version: 1.0" . "\r\n";
        //$headers .= "Content-type: text/html; charset=iso-8859-1" . "\r\n";
        $headers = "From: $ownerEmail \n";
        $headers .= "Reply-To: $ownerEmail \n";
        //cc admin ppl
        //$headers .= "Bcc: c.toppon@arts.ac.uk\n";
        //$headers .= "Bcc: k.christie@arts.ac.uk\n";
        $subject = "$formname update";
        if ($email_content != "") { 
            $body = $email_content;
        }
        else {
            $body = "Hi,\n\nThe number of submissions to '$formname' has reached " . $subs_num . ".\n\n";
        }
        $today = date('d-m-Y');
        $todayformatted = date('D jS M');
        $yesterday = strftime("%d-%m-%Y", strtotime("-1 day"));
        $yesterdayformatted = strftime("%a %d %b", strtotime("-1 day"));
        $body .= "Download results for today ($todayformatted):\n";
        $body .= "http://www.arts.ac.uk/downloadform.php?p=7JksaR9&t=$tab_name&dt=$today\n";
        $body .= "Or download yesterday's ($yesterdayformatted) results:\n";
        $body .= "http://www.arts.ac.uk/downloadform.php?p=7JksaR9&t=$tab_name&dt=$yesterday\n\n";
        $body .= "Download ALL results as a csv file using the link below:\n";
        $body .= "http://www.arts.ac.uk/downloadform.php?p=7JksaR9&t=$tab_name\n\n";
        if (mail($to, $subject, $body, $headers))
             {/*success*/}
        else {/*failure*/}
    }
    //email user #(for ack)
    function emailUser($formname, $personEmail, $replyEmail, $emailContent) {
        $to = $personEmail;
        $headers  = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type: text/html; charset=iso-8859-1" . "\r\n";
        $headers .= "From: $replyEmail\n";
        $headers .= "Reply-To: $replyEmail\n";
        $subject = $formname;
        $body = "<html><body>";
        $body .= $emailContent;
        $body .= "</body></html>";
        $body .= "\n";
        $body .= "\n\n";
        if (mail($to, $subject, $body, $headers))
            {/*success*/}
        else {
            //email admin with email address
            /*failure*/
        }
    }
?>
 
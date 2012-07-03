<?php
    //saveform.php
    //save form data to specified database table and functions to email users and admin
    //Author:    Chris Toppon 
    //Modified:  23 Apr 2007
    //Last change: Added code to strip invalid characters before inserting to mysql
    $dbServer = "localhost";
    $dbDatabase = "opendays";
    $dbUsername = "root";
    $dbPassword = "root";
		$tablename = "lcfopenday0910";
    $str_outcome = "";
    $str_errors = "";
    function connectToDB($server, $user, $pass, $database) {
        global $str_outcome;
        global $str_errors;
        $dbcnx = mysql_connect("localhost", "root", "root");
        $dbsel = mysql_select_db("opendays");
        if (!$dbcnx) {
            $str_outcome = "error";
            $str_errors .= "\n\n'Could not connect to the database server.'\n";
            $str_errors .= "\nDetails:\n server:$server \n database: $database \n username: $user \n password: $pass"; }
        if (!$dbsel) {
            $str_outcome = "error";
            $str_errors .= "\n\n'Unable to locate the $database database on the server.'\n"; }
        if(!$dbcnx || !$dbsel)
        { return false; }
        else
        { return true; }
    }
    function checkForDuplicates($tablename){
        global $arr_formItems;
        global $str_outcome;
        global $str_errors;
        //get current session's data
        $arr_FieldnamesToCheck = array();
        foreach ($arr_formItems as $vname => $value) {
            $arr_FieldnamesToCheck[] = $vname; //record the fieldnames in use
            $sThisData .= $value;
        }
        //get last data from db
        $edbdata = "sql: SELECT * FROM $tablename ORDER BY createddate DESC, id DESC LIMIT 1\n";
        $result = mysql_query("SELECT * FROM $tablename ORDER BY createddate DESC, id DESC LIMIT 1");
        if (!$result) {
            $edbdata .= "failed sql\n";
            $str_errors .= "\n\nmySQL Error: " . mysql_error() . "\n"; 
        }
        else {
            $edbdata .= "sql ok\n";
            $rowitem = mysql_fetch_assoc($result);
            foreach ($arr_FieldnamesToCheck as $key) {
                $sLastData .= $rowitem[$key];
            }
        }
        $edata .= "Data to insert: \n";
        $edata .= md5($sThisData);
        $edata .= "\n'$sThisData'\n";
        $edata .= "Data in db: \n";
        $edata .= md5($sLastData);
        $edata .= "\n'$sLastData'\n";
        $edata .= "db: $edbdata";
        //md5 then compare each string - using ===
        if (md5($sThisData) === md5($sLastData)) { 
            $edata .= "\nThe data is identical";
            //send an email to the admin showing duplication data
            //debugtoadmin($edata);
            //in this case the data is identical (duplicate) therefore we will not save into the DB
            $str_outcome = "success";
            return true; 
        }
        else {
            $edata .= "\nThe data is different";
            //debugtoadmin($edata);
            //otherwise the data is different so OK to save into the database.
            $str_outcome = "success";
            return false; 
        }
    }
    
    function insertIntoDB($formi, $tablename, $formname, $owneremail) {
        global $arr_formItems;
        global $str_outcome;
        global $str_errors;
        
        //for each formelement item, get fieldname and save value
        $sql = "INSERT INTO $tablename SET ";
        foreach ($arr_formItems as $vname => $value) {
            $value = htmlentities(strip_tags($value), ENT_QUOTES, 'UTF-8');
            if (get_magic_quotes_gpc()) {    $value = stripslashes($value);    }
            $value = "'" . mysql_real_escape_string($value) . "'";
            $sql .= "$vname=$value, ";   }
        $datefield = getDateColumnName($tablename);
        $sql .= "$datefield=NOW()";
        if (mysql_query($sql)) {
            $str_outcome = "success";
        }
        else {
            $str_outcome = "error";
            $str_errors .= "\n\nmySQL Error: " . mysql_error() . "\n"; 
        }
    }
    //check if email alert should be sent
    function checkForEmailAlert($emailfrequency, $tablename){
        global $strErrors;
        global $num_rows;
        $result = mysql_query("SELECT * FROM $tablename");
        if (!$result) { $str_errors .= "\n\nmySQL Error: " . mysql_error() . "\n"; }
        else {
            $num_rows = mysql_num_rows($result);
            if ($emailfrequency == 0){$emailfrequency = 1;}
            if ($num_rows % $emailfrequency == 0) {return true;}
            else {return false;}
        }
    }
    function getDateColumnName($tablename) {
        //compatibility hack to allow saving date to either 'created' or 'createddate'. depending what is in the table
        $columns_results = mysql_query("SELECT * FROM $tablename");
        $number_of_fields = mysql_num_fields($columns_results);        
        $columns = array();        
        for ($i=0; $i < $number_of_fields; $i++) // Header
        { 
            $columnname = "";
            $columnname = mysql_field_name($columns_results, $i);
            $columns[$columnname] = $columnname; }
        if (in_array('created', $columns)) {
            $datefield = 'created';
        }
        else {$datefield = 'createddate';}
        
        return $datefield;
    }
?>
 
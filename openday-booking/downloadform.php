<?php
    if (isset($_GET['p'])) {$p = $_GET['p'];} else {$p = "";}
    if (isset($_GET['t'])) {$t = $_GET['t'];} else {$t = "";}
    if (isset($_GET['dt'])) {$dt = $_GET['dt'];} else {$dt = "";}
    if ($p != "7JksaR9" || $t == "") {
        header('Location: http://www.fashion.arts.ac.uk');
        exit();
    } else {
        define($dbcnx, mysql_connect("web-ip1.arts.local", "commdevforms", "tac8zesk"));
        
        mysql_select_db("commdevforms");

        //compatibility hack to allow accessing the date with fieldname of either 'created' or 'createddate'
        $columns_results = mysql_query("SELECT * FROM $t");
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
        
    
        if ($dt != "") {
            $result = mysql_query("SELECT * FROM $t WHERE DATE_FORMAT($datefield ,'%d-%m-%Y') = '$dt'");
        } else {
            $result = mysql_query("SELECT * FROM $t");
        }
    
        $fields = mysql_num_fields($result);

        for ($i = 0; $i < $fields; $i++) {
            $header .= mysql_field_name($result, $i) . ",";
        }

        while($row = mysql_fetch_row($result)) {
            $line = '';
            foreach($row as $value) {
                if ((!isset($value)) OR ($value == "")) {
                    $value = ",";
                } else {
                    $value = str_replace('"', '""', $value);
                    $value = '"' . $value . '"' . ",";
                }
                $line .= $value;
            }
            $data .= trim($line)."\n";
        }
        $data = str_replace("\r","",$data);

        if ($data == "") {
            $data = "\n(0) Records Found!\n";
        }
  
        $dateandtime = date("D-j-M-y-Gia");
  
        header("Content-type: application/octet-stream");
        header("Content-Disposition: attachment; filename=$t-$dateandtime.csv");
        header("Pragma: no-cache");
        header("Expires: 0");
        print "$header\n$data";  
    }
?>
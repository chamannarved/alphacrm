<?php
    {   //Secure Connection Script
        include(../Connect_DB/alphacrm_DB.php);
        $dbSuccess = false;
        $dbConnected = mysql_connect($db['hostname'],$db['username'],$db[password]);

        if($dbConnected){
            $dbSelected = mysql_select_db($db[database],$dbConnected);
            if ($dbSelected){
                $dbSuccess = true;
            }
        }
        // END Secure Connection Script 
    }

    if($dbSuccess){
        echo("Success")
    }
?>
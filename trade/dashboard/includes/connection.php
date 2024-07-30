<?php
// Database connection (Change credentials accordingly)
        $servername = "vin101.truehost.cloud";
        $username = "trustron_coinstar";
        $password = "PswaRA@hfiy!";
        $dbname = "trustron_coinstar";

        $conn = new mysqli($servername, $username, $password, $dbname);
        // if($conn){
        //     echo "connected successfully";
        // }else{
        //     echo "connection failed";
        // }
<?php
    $db_host = "localhost";
    $db_user = "root";
    $db_password = '$K!$h0r9007';
    $db_name = "osms";

    // Create Connection
    $conn = new mysqli($db_host, $db_user, $db_password, $db_name);

    // checking Connection

    if($conn->connect_error) {
        die("Connection Failed");
    }
    // else {
    //     echo "Connection Success";
    // }

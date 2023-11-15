<?php
    $servername = "server_name";
    $username = "username";
    $password = "your_pwd";
    $dbname = 'db_name';

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
?>

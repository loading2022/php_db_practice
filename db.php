<?php
    $servername = "localhost";
    $username = "root";
    $password = "aa0421626";
    $dbname = 'search_collect';

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
?>
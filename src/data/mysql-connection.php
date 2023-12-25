<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "enrollment_system";

    //create connection
        $connection = new mysqli($servername, $username, $password, $database);
    //check connection 
        if ($connection->connect_error) {
            die("Connection failed: ". $connection->connect_error);
        }
?>
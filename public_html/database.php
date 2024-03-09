<?php

    $hostName = "localhost";
    $dbUser = "id21968413_root";
    $dbPassword = "Test@123";
    $dbName = "id21968413_personalprofile";
    $conn = mysqli_connect($hostName, $dbUser, $dbPassword, $dbName);
    if(!$conn){
        die("Something went wrong!");
    }

?>
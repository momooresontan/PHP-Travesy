<?php 
    define("DB_HOST", "localhost");
    define("DB_USER", "momoore");
    define("DB_PASSWORD", "password");
    define("DB_NAME", "php_dev_brad");
    //Create connection
    $conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
    //Check connection
    if($conn->connect_error){
        die("Connection Failed " . $conn->connect_error);
    }
    echo "CONNECTED!";
?>
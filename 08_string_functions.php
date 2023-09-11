<?php 
    $string = "Hello world";
    echo strlen($string);
    echo strpos($string, 'o');
    echo strrpos($string, 'o');
    echo strrev($string);
    echo strtolower($string);
    echo strtoupper($string);
    echo ucwords($string);
    echo str_replace("world", "Everyone", $string);
    echo substr($string, 0, 5);
    echo substr($string, 5);

?>
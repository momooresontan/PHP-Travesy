<?php 
    function registerUser ($email){
        echo "$email registered";
    }
    //registerUser("momo@test.io");
    function sum ($n1 = 4, $n2 = 5){
        return $n1 + $n2;
    }
    $number = sum();
    // echo $number;
    $subtract = function ($n1, $n2){
        return $n1 - $n2;
    };
    echo $subtract(10, 5);


?>
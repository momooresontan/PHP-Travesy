<?php 
    $fruits = [
        "apple",
        "orange",
        "banana",
        "pear",
    ];
    //Get length
    //echo count($fruits);
    //Search array
    // var_dump(in_array("mango", $fruits));
    //Add to array
    $fruits[] = "grape";
    array_push($fruits, "mango");    
    print_r($fruits);

?>
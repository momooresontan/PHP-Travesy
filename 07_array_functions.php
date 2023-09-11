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
    array_unshift($fruits, "guava", "avocado");
    //Remove from array
    array_pop($fruits);    
    array_shift($fruits);
    // unset($fruits[2]);
    //Split into 2 chunks
    // $chunked_array = array_chunk($fruits, 2);
    // print_r($chunked_array);
    //print_r($fruits);
    $arr1 = [1, 2, 3];
    $arr2 = [4, 5, 6];
    $arr3 = array_merge($arr1, $arr2);
    $arr4 = [...$arr1, ...$arr2];

    print_r($arr4);



    

?>
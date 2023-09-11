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
    // print_r($arr4);
    $a = ["green", "red", "yellow"];
    $b = ["avocado", "apple", "banana"];
    $c = array_combine($a, $b);
    // print_r($c);
    $keys = array_keys($c);
    // print_r($keys);
    $flipped = array_flip($c);
    // print_r($flipped);
    $numbers = range(1, 20);
    // print_r($numbers);
    $new_numbers = array_map(function($number) {
        return "Number: $number";
    }, $numbers);
    // print_r($new_numbers);
    $lessThan10 = array_filter($numbers, fn($number) => $number <= 10);
    // print_r($lessThan10);
    $sum = array_reduce($numbers, fn($carry, $number) => $carry + $number);
    var_dump($sum);

?>
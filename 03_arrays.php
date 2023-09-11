<?php
   //Simple Array
   $numbers = [1, 44, 32, 24, 50]; 
    //Array function
    $fruits = array('apple', 'orange', 'pear');
    //var_dump($numbers);
    // echo $fruits[1];
    //Associative array
    $colours = [
        1 => 'red',
        4 => 'blue',
        6 => 'green',
    ];
    // echo $colours[0];
    $hex = [
        "red" => "#f00",
        "blue" => "#0f0",
        "green" => "#00f",
    ];
    // echo $hex["blue"];
    $person = [
        "first_name" => "King",
        "last_name" => "MoMo",
        "email" => "momo@test.io",
    ];
    // echo $person["first_name"];
    //Multidimensional array
    $people = [
        [
            "first_name" => "King",
            "last_name" => "MoMo",
            "email" => "momo@test.io",
        ],
        [
            "first_name" => "Lana",
            "last_name" => "Adeniyi",
            "email" => "lana@test.io",
        ],
        [
            "first_name" => "Murewa",
            "last_name" => "Adegun",
            "email" => "murray@test.io",
        ],
    ];
    // echo $people[1]["email"];
    var_dump(json_encode($people));

?>
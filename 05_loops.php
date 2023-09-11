<?php 
    //For loop
    // for($x = 0; $x < 10; $x++){
    //     echo "Number " . $x . "<br>";
    // }
    //While loop
    // $x = 1;
    // while($x <= 15){
    //     echo "Number " . $x . "<br>";
    //     $x++;
    // }
    //Do while loop
    // $x = 1;
    // do{
    //     echo "Number " . $x . "<br>";
    //     $x++;
    // } while($x <= 5);
    //Foreach (for arrays)
    $posts = [
        "First Post",
        "Second Post",
        "Third Post",
        "Fourth Post",
    ];
    // for($x = 0; $x <  count($posts); $x++){
    //     echo $posts[$x] . "<br>";
    // }
    // foreach($posts as $post){
    //     echo $post . "<br>";
    // }
    // foreach($posts as $index => $post){
    //     echo $index . "-" . $post . "<br>";
    // }
    $person = [
        "first_name" => "King",
        "last_name" => "MoMo",
        "email" => "momo@test.io",
    ];
    foreach($person as $key => $value){
        echo "$key - $value <br>";
    }
?>
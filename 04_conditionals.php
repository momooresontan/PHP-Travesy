<?php 
    $age = 16;
    // if($age >= 18){
    //     echo "You are old enough to vote";
    // }else{
    //     echo "You are underage";
    // }
    // $t = date("H");
    // if($t < 12){
    //     echo "Good morning";
    // }elseif($t < 17){
    //     echo "Good afternoon";
    // }    
    // else{
    //     echo "Good evening";
    // }
    $posts = ["First Post"];
    // if(!empty($posts)){
    //     echo "There are posts";
    // }else{
    //     echo "No posts";
    // }
    //Tenary operator
    // echo !empty($posts) ? $posts[0] : "No posts";
    // $firstPost =  !empty($posts) ? $posts[0] : "No posts";
    // $firstPost =  !empty($posts) ? $posts[0] : null;
    // $firstPost = !empty($posts) ? $posts[0] ?? null;
    // echo $firstPost;

    $favColor = "yellow";
    switch($favColor){
        case "red": 
            echo "Your favourite colour is RED";
            break;
        case "blue":
            echo "Your favourite colour is BLUE";
            break;
        
        case "green":
            echo "Your favourite colour is GREEN";
            break;
        default:
        echo "Your favourite colour is $favColor";
        
        
    }



?>
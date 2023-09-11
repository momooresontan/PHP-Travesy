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
    $posts = [];
    // if(!empty($posts)){
    //     echo "There are posts";
    // }else{
    //     echo "No posts";
    // }
    //Tenary operator
    echo !empty($posts) ? $posts[0] : "No posts";


?>
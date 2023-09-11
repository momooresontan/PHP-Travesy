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
    if(str_starts_with($string, "Hello")){
        echo "YES<br>";
    }
    if(str_ends_with($string, "ld")){
        echo "YES<br>";
    }
    $string2 = "<script>alert(1)</script>";
    echo htmlspecialchars($string2) . "<br>";
    printf("%s likes to %s", "MoMo", "code");
    printf("1+1 =  %f", 1+1);

?>
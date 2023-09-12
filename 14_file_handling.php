<?php 
    $file = "extras/user.txt";

    if(file_exists($file)){
        // echo readfile($file);
        $handle = fopen($file, "r");
        $contents = fread($handle, filesize($file));
        fclose($handle);
        echo $contents;
    } else{
        $handle = fopen($file, "w");
        $contents = "MoMo" . PHP_EOL . "Murray" . PHP_EOL . "Sammy";
        fwrite($handle, $contents);
        fclose($handle);
    }
?>
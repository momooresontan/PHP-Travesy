<?php 
    //Set cookie
    setcookie("name", "MoMo", time() + 86400 * 30);
    if(isset($_COOKIE["name"])){
        echo $_COOKIE["name"];
    }

?>
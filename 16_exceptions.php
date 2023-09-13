<?php 
    function inverse($x){
        if(!$x){
            throw new Exception("Division by zero");
        }
        return 1/$x;
    }
    try{
        echo inverse(7);
        echo inverse(0);
    }catch(Exception $e){
        echo "Caught Exception" . $e->getMessage() . " <br>";
    }finally{
        echo "First finally";
    }
    try{
        echo inverse(0);
    }catch(Exception $e){
        echo "Caught Exception" . $e->getMessage() . " <br>";
    }finally{
        echo "Second finally";
    }
?>
<?php 
    class User{
        //Properties are attributes that belong to a class
        public $name;
        public $email;
        public $password;
        //Method is a function that belong to a class
        function set_name($name){
            $this->name;
        }

    }
    //Instanciate User object
    $user1 = new User();
    $user1-> name = "MoMo";

    var_dump($user1);
?>
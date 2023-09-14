<?php 
    class User{
        //Properties are attributes that belong to a class
        public $name;
        public $email;
        public $password;
        //A constructor is a function or method that runs when an object is created
        public function __construct($name, $email, $password){
            $this->name = $name;
            $this->email = $email;
            $this->password = $password;
        }

        //Method is a function that belong to a class
        //Setter
        function set_name($name){
            $this->name = $name;
        }
        //Getter
        function get_name(){
            return $this->name;
        }
    }
    //Instanciate User object
    $user1 = new User("MoMo", "momo@test.io", "password");
    $user2 = new User("Murray", "murray@test.io", "password");
    echo $user1->email;
    echo $user2->email;
    //Inheritance
    class Employee extends User {
        public function __construct($name, $email ,$password, $title )
        {
            parent::__construct($name, $email, $password);
            $this->title = $title; 
        }
    }


?>
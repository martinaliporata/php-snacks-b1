<?php
    class User {
        private $name;
        private $username;
        private $email;

    public function __construct($name, $username, $email)
        {
            $this->name= $name;
            $this->username= $username;
            $this->email= $email;
        }

    public function getDiscount(){
        return 0;
    }

    public function getName(){
        return 0;
    }

    public function setName($name){
        if (strlen($name)>=2){
            $this->name= $name;
        }
    }
}

// getter e setter di ogni variabile di istanza...
?>
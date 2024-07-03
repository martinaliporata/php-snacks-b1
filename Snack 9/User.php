<?php
    class User {
        private $name;
        private $surname;

    public function __construct($name, $surname)
        {
            $this->name= $name;
            $this->surname= $surname;
        }

    public function getFullName(){
        return "Ciao, io sono {$this->name} {this->surname}";
    }

    public function setFullName($name, $surname) {
        $this->name=$name;
        $this->surname=$surname;
    }
}
?>
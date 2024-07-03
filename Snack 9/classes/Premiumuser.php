<?php

require_once __DIR__ . '/Membership.php';

    class PremiumUser extends User {
        private $membership;

        // tipizzazione membership
        public function __construct($name, $surname, Membership $membership)
        {
            parent::__construct($name, $surname);
            $this->membership= $membership;
        }

        // public function getFullName(){
        //     return "Ciao, io sono {$this->name} {this->surname}";
        // }
    
        // public function setFullName($name, $surname) {
        //     $this->name=$name;
        //     $this->surname=$surname;
        // }
    }
?>
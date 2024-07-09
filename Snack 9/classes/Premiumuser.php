<?php

    class PremiumUser extends User {
        private $membership;

        // tipizzazione membership
        public function __construct($name, $username, $email, Membership $membership){
            parent::__construct($name, $username, $email);
            $this->membership= $membership;
        }
    }
// getter e setter di ogni variabile di istanza...
?>
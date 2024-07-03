<?php
    class premiumUser {
        private $name;
        private $surname;
        private $vipPass;

        public function __construct($name, $surname, $vipPass)
        {
            $this->name= $name;
            $this->surname= $surname;
            $this->vipPass= $vipPass;
        }
    }
?>
<?php

    class User {
        private $_id;
        private $name;
        private $email;
        private $jobTitle;
        private $pic;

        public function getId(){ return $this->_id; }
        public function getName(){ return $this->name; }
        public function getEmail(){ return $this->email; }
        public function getJobTitle(){ return $this->jobTitle; }
        public function getPic(){ return $this->pic; }

        public function setId($id){ $this->_id = $id; }
        public function setName($name){ $this->name = $name;}
        public function setEmail($email){ $this->email = $email; }
        public function setJobTitle($jobTitle){ $this->jobTitle = $jobTitle; }
        public function setPic($pic){ $this->pic = $pic; }
    }
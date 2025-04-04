<?php
    class Scientist{
        private $id;
        private $name;
        private $timePeriod;
        private $nationality;
        private $contribution;

        public function load($row){
            $this->setID($row['id']);
            $this->setName($row['name']);
            $this->setTimePeriod($row['timePeriod']);
            $this->setNationality($row['nationality']);
            $this->setContribution($row['contribution']);
        }

        public function setID($id){
            $this->id=$id;
        }

        public function getID(){
            return $this->id;
        }

        public function setName($name){
            $this->name=$name;
        }

        public function getName(){
            return $this->name;
        }

        public function setTimePeriod($timePeriod){
            $this->timePeriod=$timePeriod;
        }

        public function getTimePeriod(){
            return $this->timePeriod;
        }

        public function setNationality($nationality){
            $this->nationality=$nationality;
        }

        public function getNationality(){
            return $this->nationality;
        }

        public function setContribution($contribution){
            $this->contribution=$contribution;
        }

        public function getContribution(){
            return $this->contribution;
        }
    }
?>
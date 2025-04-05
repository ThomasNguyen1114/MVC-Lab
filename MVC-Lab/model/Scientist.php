<?php
class Scientist {
    private $id;
    private $name;
    private $timePeriod;
    private $nationality;
    private $contribution;

    // Method to load the scientist's details from a database row
    public function load($row) {
        $this->setID($row['id']);
        $this->setName($row['name']);
        $this->setTimePeriod($row['timePeriod']);
        $this->setNationality($row['nationality']);
        $this->setContribution($row['contribution']);
    }

    // Setter for ID
    public function setID($id) {
        $this->id = $id;
    }

    // Getter for ID
    public function getID() {
        return $this->id;
    }

    // Setter for Name
    public function setName($name) {
        $this->name = $name;
    }

    // Getter for Name
    public function getName() {
        return $this->name;
    }

    // Setter for Time Period
    public function setTimePeriod($timePeriod) {
        $this->timePeriod = $timePeriod;
    }

    // Getter for Time Period
    public function getTimePeriod() {
        return $this->timePeriod;
    }

    // Setter for Nationality
    public function setNationality($nationality) {
        $this->nationality = $nationality;
    }

    // Getter for Nationality
    public function getNationality() {
        return $this->nationality;
    }

    // Setter for Contribution
    public function setContribution($contribution) {
        $this->contribution = $contribution;
    }

    // Getter for Contribution
    public function getContribution() {
        return $this->contribution;
    }
}
?>

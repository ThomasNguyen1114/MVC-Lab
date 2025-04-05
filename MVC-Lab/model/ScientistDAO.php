<?php
require_once 'Scientist.php';  // Make sure the Scientist class is included

class ScientistDAO {

    // Method to establish a database connection
    public function getConnection() {
        $mysqli = new mysqli("127.0.0.1", "exam2user", "exam2pass", "practiceExam2");

        if ($mysqli->connect_errno) {
            $mysqli = null;
        }

        return $mysqli;
    }

    // Method to add a new scientist to the database
    public function addScientist($scientist) {
        $connection = $this->getConnection();
        $stmt = $connection->prepare("INSERT INTO scientists (name, timePeriod, nationality, contribution) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", 
            $scientist->getName(), 
            $scientist->getTimePeriod(), 
            $scientist->getNationality(), 
            $scientist->getContribution()
        );
        $stmt->execute();
        $stmt->close();
        $connection->close();
    }

    // Method to delete a scientist from the database by ID
    public function deleteScientist($id) {
        $connection = $this->getConnection();
        $stmt = $connection->prepare("DELETE FROM scientists WHERE id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $stmt->close();
        $connection->close();
    }

    // Method to retrieve all scientists from the database
    public function getScientists() {
        $connection = $this->getConnection();
        $stmt = $connection->prepare("SELECT * FROM scientists;");
        $stmt->execute();
        $result = $stmt->get_result();
        
        $scientists = [];
        while ($row = $result->fetch_assoc()) {
            $scientist = new Scientist();
            $scientist->load($row);
            $scientists[] = $scientist;
        }

        $stmt->close();
        $connection->close();

        return $scientists;
    }
}
?>

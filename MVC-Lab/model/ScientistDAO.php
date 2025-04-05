<?php
require_once 'Scientist.php'; 
class ScientistDAO {

    public function getConnection() {
        $mysqli = new mysqli("127.0.0.1", "exam2user", "exam2pass", "practiceExam2");

        if ($mysqli->connect_errno) {
            $mysqli = null;
        }

        return $mysqli;
    }
    
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

    public function deleteScientist($id) {
        $connection = $this->getConnection();
        $stmt = $connection->prepare("DELETE FROM scientists WHERE id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $stmt->close();
        $connection->close();
    }

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

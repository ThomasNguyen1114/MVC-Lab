<?php 
    class ScientistList implements controllerAction {

        public function processGET() {
            $scientistDAO = new ScientistDAO();
            $scientists = $scientistDAO->getScientists();
            include 'views/listScientists.php';
        }

        public function processPOST() {
            return;
        }

    }

    class ScientistAdd implements controllerAction {

        public function processGET() {
            include 'views/addScientist.php';
        }

        public function processPOST() {
            $name = $_POST['name'];
            $timePeriod = $_POST['timePeriod'];
            $nationality = $_POST['nationality'];
            $contribution = $_POST['contribution'];
            
            $scientist = new Scientist();
            $scientist->setName($name);
            $scientist->setTimePeriod($timePeriod);
            $scientist->setNationality($nationality);
            $scientist->setContribution($contribution);

            $scientistDAO = new ScientistDAO();
            $scientistDAO->addScientist($scientist);

            header("Location: scienceController.php?page=list");
            exit;
        }

    }

    class ScientistDelete implements controllerAction {

        public function processGET() {
            $id = $_GET['id'];
            include 'views/deleteScientist.php';
        }

        public function processPOST() {
            $id = $_POST['id'];
            $submit = $_POST['submit'];

            if ($submit == 'CONFIRM') {
                $scientistDAO = new ScientistDAO();
                $scientistDAO->deleteScientist($id);
            }

            header("Location: scienceController.php?page=list");
            exit;
        }
    }
?>
<?php
    include_once "controllers/controllerAction.php";
    include_once "controllers/scientistController.php";
    include_once "models/ScientistDAO.php";

    class FrontController { 
        private $controllers;
        

        public function __construct(){
            $this->showErrors(0);
            $this->controllers = $this->loadControllers();
        }

        public function run(){
            $method = $_SERVER['REQUEST_METHOD'];
            $page = $_REQUEST['page'];
        
            $controller = $this->controllers[$method.$page];
            if($method=='GET'){
                $controller->processGET();
            }
            if($method=='POST'){
                $controller->processPOST();
            }
        }

        private function loadControllers(){
            $controllers["GET"."list"] = new ScientistList();
            $controllers["GET"."add"] = new ScientistAdd();
            $controllers["POST"."add"] = new ScientistAdd();
            $controllers["GET"."delete"] = new ScientistDelete();
            $controllers["POST"."delete"] = new ScientistDelete();
            return $controllers;
        }

        private function showErrors($debug){
            if($debug==1){
                ini_set('display_errors', 1);
                ini_set('display_startup_errors', 1);
                error_reporting(E_ALL);
            }
        }
    }

    $controller = new FrontController();
    $controller->run();
?>
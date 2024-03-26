<?php

/**
 * Base controller for the application.
 * Add general things in this controller.
 */
 
require_once __DIR__."/../models/readModel.php";

class ApplicationController extends Controller {

    protected $readModel;
    

    public function __construct() {
        $this->readModel = new ReadModel(); //instanciamos la clase
    }
public function indexAction() {
   
    $viewTask = $this->readModel->readTasks();
    $this->view->viewTask = $viewTask;
    //return $this->readModel->readModel(); 
    }
}

?>
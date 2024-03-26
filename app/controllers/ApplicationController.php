<?php

/**
 * Base controller for the application.
 * Add general things in this controller.
 */
 
require_once __DIR__."/../models/readModel.php";
class ApplicationController extends Controller {

    protected $readModel;
    protected $updateModel;

    public function __construct() {
        $this->readModel = new readModel(); //instanciamos la clase
        $this->updateModel = new UpdateModel();
    }
public function indexAction() {
   
   
    $viewTask = $this->readModel->readTasks();
    $this->view->viewTask = $viewTask;
    //return $this->readModel->readModel(); 
    }
public function updateTaskAction ($taskId, $updateDb) {
    $this->updateModel->updateTask($taskId, $updateDb);
}  
}

?>
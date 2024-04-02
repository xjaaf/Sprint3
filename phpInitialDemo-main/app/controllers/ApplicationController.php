<?php
require_once(__DIR__ . "/../models/TaskModel.php");
/**
 * Base controller for the application.
 * Add general things in this controller.
 */
class ApplicationController extends Controller 
{
    private $tasks;

public function __construct()
{
        $this->tasks = new TaskModel();    
}
public function showTasksAction(){
    
    $taskList = $this->tasks->showTasks();
    $this->view->taskList = $taskList;
}
public function createTaskAction(){

 $this->view;
}
} 
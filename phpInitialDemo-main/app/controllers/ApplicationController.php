<?php
require_once(__DIR__ . "/../models/TaskModel.php");

class ApplicationController extends Controller
{
<<<<<<< HEAD
    private $tasks;

    public function __construct()
    {
        $this->tasks = new TaskModel();
    }

    public function showTasksAction()
    {
        $taskList = $this->tasks->showTasks();
        $this->view->taskList = $taskList;
    }
}
=======
	public function create()
    {
        
    }
}
>>>>>>> 6262fa5 (metodo create inicializado)

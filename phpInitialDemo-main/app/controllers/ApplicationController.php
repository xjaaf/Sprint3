<?php
require_once(__DIR__ . "/../models/TaskModel.php");
<<<<<<< HEAD

=======
/**
 * Base controller for the application.
 * Add general things in this controller.
 */
>>>>>>> 59cf98d (fixed date format, json permition ables)
class ApplicationController extends Controller
{
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    private $tasks;

    public function __construct()
    {
        $this->tasks = new TaskModel();
    }
<<<<<<< HEAD

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
<<<<<<< HEAD
>>>>>>> 6262fa5 (metodo create inicializado)
=======

}
>>>>>>> 7f50843 (borrado prueba)
=======
public function pruebaAction(){
    echo"hola";
    return $this->view;
}
} 
>>>>>>> d2180e1 (borrados de pruebas)
=======
public function createTaskAction(){
=======
    public function showTasksAction()
    {
>>>>>>> 59cf98d (fixed date format, json permition ables)

        $taskList = $this->tasks->showTasks();
        $this->view->taskList = $taskList;
    }
    public function createTaskAction()
    {

        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $description = $this->_getParam('description');
            $responsible = $this->_getParam('responsible');
            $startTask = date_create($_POST['startTask'])->format('yy-m-d');
            $status = $this->_getParam('status');
            $endTask = date_create($_POST['endTask'])->format('yy-m-d');


            $newTask = [
                'id' => $this->tasks->nextId(),
                'description' => $description,
                'responsible' => $responsible,
                'startTask' => $startTask,
                'status' => $status,
                'endTask' => $endTask,
            ];
       

            $this->tasks->createTask($newTask);
            header('Location: ' . $this->_baseUrl());
            exit();
        }
    }
}
<<<<<<< HEAD
} 
>>>>>>> d756344 (forma created)
=======
>>>>>>> 59cf98d (fixed date format, json permition ables)

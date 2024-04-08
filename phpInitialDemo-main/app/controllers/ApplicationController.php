<?php
require_once(__DIR__ . "/../models/TaskModel.php");
<<<<<<< HEAD
<<<<<<< HEAD

=======
/**
 * Base controller for the application.
 * Add general things in this controller.
 */
>>>>>>> 59cf98d (fixed date format, json permition ables)
=======

>>>>>>> 131f059 (pruebas update)
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
<<<<<<< HEAD
=======
>>>>>>> 131f059 (pruebas update)

    public function showTasksAction()
    {
<<<<<<< HEAD
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

=======
>>>>>>> 03cbd1e (modificaciones en view create)
        $taskList = $this->tasks->showTasks();
        $this->view->taskList = $taskList;
    }

    public function createTaskAction()
    {
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $description = $this->_getParam('description');
            $responsible = $this->_getParam('responsible');
            $startTask = $_POST['startTask'];
            $status = $this->_getParam('status');
            $endTask = $_POST['endTask'];

            // Validar las fechas
            if ($this->validateDates($startTask, $endTask)) {
                $newTask = [
                    'description' => $description,
                    'responsible' => $responsible,
                    'startTask' => $startTask,
                    'status' => $status,
                    'endTask' => $endTask,
                ];

                $this->tasks->createTask($newTask);
                header('Location: ' . $this->_baseUrl());
                exit();
            } else {
                // Mostrar un mensaje de error
                echo "<script>alert('Error: La fecha de fin no puede ser anterior a la fecha de inicio.');</script>";
            }
        }
    }

    private function validateDates($startTask, $endTask)
    {
        $startDate = strtotime($startTask);
        $endDate = strtotime($endTask);
        return $endDate >= $startDate;
    }
    public function deleteTaskAction()
    {
        if ($_SERVER["REQUEST_METHOD"] === "GET") {
            $taskId = $_GET['taskId'];
            $this->tasks->deleteTask($taskId);
            header('Location: ' . $this->_baseUrl());
            exit();
        }
    }
    public function editTaskAction()
    {
        if ($_SERVER["REQUEST_METHOD"] === "GET") {
            $taskId = $this->_getParam('taskId');

            // Obtener los datos de la tarea seleccionada
            $taskData = $this->tasks->getTaskById($taskId);

            // Pasar los datos de la tarea a la vista
            $this->view->task = $taskData;
        }
    }
    public function updateTaskAction()
    {
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            // Obtener los datos de la tarea a actualizar
            $updatedTask = [
                'id' => $_POST['id'],
                'description' => $_POST['description'],
                'responsible' => $_POST['responsible'],
                'startTask' => $_POST['startTask'],
                'endTask' => $_POST['endTask'],
                'status' => $_POST['status']
            ];

            // Actualizar la tarea en la base de datos
            $result = $this->tasks->updateTask($updatedTask);

            if ($result) {
                // Redirigir al usuario de vuelta a la página principal de tareas

                header('Location: ' . $this->_baseUrl() . '/showTasks');

                exit();
            } else {
                $msg = "error";
                $this->view->msg = $msg;
                // Manejar el error si la actualización falla
                //echo "Error: Failed to update task.";
            }
        }
    }
}
<<<<<<< HEAD
<<<<<<< HEAD


}
<<<<<<< HEAD
} 
>>>>>>> d756344 (forma created)
=======
>>>>>>> 59cf98d (fixed date format, json permition ables)
=======
>>>>>>> 0ea3b20 (app funcionando)
=======
>>>>>>> 1b584d3 (update added)

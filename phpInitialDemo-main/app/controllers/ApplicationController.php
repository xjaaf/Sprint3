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
    public function showTasksAction()
    {
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
        $taskId = $_GET['taskId']; // Obtener el ID de la tarea a editar
        // You can add further validation here if required

        // Redirect to the edit task form with the task ID
        header('Location: ' . $this->_baseUrl() . '/editTask?taskId=' . $taskId);
        exit();
    }
}
    
}

<?php
require_once(__DIR__ . "/../models/TaskModel.php");

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


}


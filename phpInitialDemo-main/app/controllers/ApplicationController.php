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
}
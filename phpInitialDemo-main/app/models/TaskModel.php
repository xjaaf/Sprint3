<?php

class TaskModel extends Model
{

    protected static $nextId = 1;
    protected array $task;
    protected $dbTask;

    public function __construct()
    {
        $this->dbTask = __DIR__ . "/dataTask.json";
        $this->task = [];
        $this->initializeNextId();
    }
    private function initializeNextId()
    {
        $dataBase = file_get_contents($this->dbTask);
        $this->task = json_decode($dataBase, true);

        if (!empty($this->task)) {
            // Obtener el id más alto de las tareas existentes
            $highestId = max(array_column($this->task, 'id'));
            self::$nextId = $highestId + 1; // Incrementar el id más alto
        }
    }
    public function nextId()
    {
        return self::$nextId++;
    }
    public function showTasks()
    {
        $dataBase = file_get_contents($this->dbTask); // saca datos de la base de datos y los guarda en variable dataBase. 
        $this->task = json_decode($dataBase, true); // nos da la info en forma de array

        return $this->task;
    }
    public function createTask($task)
    {
        $this->showTasks();
        $task['id'] = $this->nextId(); // Asignar el nuevo id a la tarea
        $this->task[] = $task;

        $dbTask = json_encode($this->task, JSON_PRETTY_PRINT);
        file_put_contents($this->dbTask, $dbTask);
    }
    public function deleteTask($taskId)
    {
        $this->showTasks();
        foreach ($this->task as $key => $task) {
            if ($task['id'] == $taskId) {
                unset($this->task[$key]);
                break;
            }
        }

        $dbTask = json_encode($this->task, JSON_PRETTY_PRINT);
        file_put_contents($this->dbTask, $dbTask);
    }


    
}
?>

<?php
class TaskModel extends Model
{
    protected static $nextId = 1;
    protected $task;
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
            $highestId = max(array_column($this->task, 'id'));
            self::$nextId = $highestId + 1;
        }
    }

    public function nextId()
    {
        return self::$nextId++;
    }

    public function showTasks()
    {
        $dataBase = file_get_contents($this->dbTask);
        $this->task = json_decode($dataBase, true);
        return $this->task;
    }

    public function createTask($task)
    {
        // Verificar si la fecha de fin es posterior a la fecha de inicio
        if (strtotime($task['endTask']) < strtotime($task['startTask'])) {
            // Fecha de fin es anterior a la fecha de inicio
            echo "Error: La fecha de fin no puede ser anterior a la fecha de inicio.";
            return;
        }

        // Continuar con la creación de la tarea
        $this->showTasks();
        $task['id'] = $this->nextId(); // Asignar el nuevo id a la tarea
        $this->task[] = $task;

        $dbTask = json_encode($this->task, JSON_PRETTY_PRINT);
        file_put_contents($this->dbTask, $dbTask);
    }

}

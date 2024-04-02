<?php 

class TaskModel extends Model{

    protected static $nextId = 1;
    protected array $task;
    protected $dbTask;

    public function __construct() {
        $this->dbTask = __DIR__ . "/dataTask.json";
        $this->task = [];
    }

    public function nextId()
    {
        return ++self::$nextId;
    }
    public function showTasks (){
        $dataBase = file_get_contents($this->dbTask); // saca datos de la base de datos y los guarda en variable dataBase. 
        $this->task = json_decode($dataBase, true); // nos da la info en forma de array
        
        return $this->task;
    }
    public function createTask ($task){
        
        $this->showTasks();
        $this->task[]=$task;
        
        $dbTask = json_encode($this->task, JSON_PRETTY_PRINT);
        file_put_contents($this->dbTask, $dbTask);
       

    }


}







?>
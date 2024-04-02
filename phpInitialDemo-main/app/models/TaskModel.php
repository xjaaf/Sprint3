<?php 

class TaskModel extends Model{

    //protected static $idTask = 1;
    protected array $task;
    protected $dbTask;

    public function __construct() {
        $this->dbTask = __DIR__ . "/dataTask.json";
        $this->task = [];
        //$this->idTask++;
    }

    public function showTasks (){
        $dataBase = file_get_contents($this->dbTask); // saca datos de la base de datos y los guarda en variable dataBase. 
        $this->task = json_decode($dataBase, true); // nos da la info en forma de array
        
        return $this->task;
    }



}







?>
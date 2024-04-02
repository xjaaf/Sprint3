<?php
//namespace app\models;
Class ReadModel extends Model {

    protected $dbTask;

    public function __construct() {
        parent::__construct();
        $this->dbTask = __DIR__ ."/models/dataTask.json";
    }
    public function readTasks() {
         $newDb = file_get_contents($this->dbTask); //función lee el contenido de la variable que almacena el .json y lo almacena en $newDb, 
         var_dump($newDb);
         $dbToRead = json_decode($newDb, true); //función que convierte y decodifica el .json en un array asociativo y lo almacena en $dbToRead.
         return $dbToRead;
        }
    }
?>    
<?php
class UpdateModel extends Model {
    
    protected $dbTask;
    protected $readModel;

    public function __construct() {
        parent::__construct();
        $this->dbTask = __DIR__ ."/models/dataTask.json";
        $this->readModel = new ReadModel(); //instancia para poder reutilizar el método readTasks de la clase ReadModel
    }

public function updateTask ($taskId, $updateDb) {//parámetros id tarea actualizar y los datos a actualizar
    $jsonDb = $this->readModel->readTasks(); //llamada al método readTask para leer el contenido original del archivo.json. 
    foreach ($jsonDb as &$task ) {
        if($task["id"] === $taskId) { //si la condición se cumple actualizamos los campos de la tarea encontrada.
            $task = array_merge ($task, $updateDb); //combina elementos de la tarea encontrada con la actualización de datos.
            break;
        }

    }
    file_put_contents($this->dbTask, json_encode($jsonDb, JSON_PRETTY_PRINT));/*Actualizada la tarea, file_put_contents 
    escribe los datos .json codificados en $dbTask /json_encode convierte en formato json los datos actualizados en 
    el array $jsonDb y JSON_PRETTY_PRINT hace legibles los datos (configura márgenes, saltos de página...)*/
}
}

?>
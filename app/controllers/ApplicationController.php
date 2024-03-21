<?php

/**
 * Base controller for the application.
 * Add general things in this controller.
 */
 
require_once (__DIR__."/../models/taskModel.php");

class ApplicationController extends Controller {

public function indexAction() {
    echo "Estamos fritos desde controller";
    
    $this->view;
    
}
}
?>
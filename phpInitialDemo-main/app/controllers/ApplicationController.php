<?php

/**
 * Base controller for the application.
 * Add general things in this controller.
 */
class ApplicationController extends Controller 
{
public function pruebaAction(){
    echo"hola";
    return $this->view;
}
} 
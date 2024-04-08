<?php 

/**
 * Used to define the routes in the system.
 * 
 * A route should be defined with a key matching the URL and an
 * controller#action-to-call method. E.g.:
 * 
 * '/' => 'index#index',
 * '/calendar' => 'calendar#index'
 */
$routes = array(
<<<<<<< HEAD
    '/' => 'Application#showTasks',
    '/deleteTask' => 'Application#deleteTask',
    '/createTask' => 'Application#createTask',
    '/showTasks' => 'Application#showTasks',
    '/editTask' => 'Application#editTask', // Ruta para la acción de editar tarea
    '/updateTask' => 'Application#updateTask', // Ruta para la acción de actualizar tarea
    
);
=======

	'/test' => 'test#index',
	'/' => 'Application#showTasks',
	'/createTask' => 'Application#createTask',
    '/showTasks' => 'Application#showTasks',
	'/deleteTask' => 'Application#deleteTask'

);
>>>>>>> b656928 (creat created)

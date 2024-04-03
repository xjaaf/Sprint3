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
<<<<<<< HEAD:config/routes.php
<<<<<<< HEAD:config/routes.php
	'/test' => 'test#index',
	'/' => 'application#prueba',

	'/prueba' => 'application#prueba'

=======
	'/' => 'Application#showTasks',
	'/createTask' => 'Application#createTask'
>>>>>>> d756344 (forma created):phpInitialDemo-main/config/routes.php
);
=======
    '/' => 'Application#showTasks',
    '/deleteTask' => 'Application#deleteTask',
    '/createTask' => 'Application#createTask',
<<<<<<< HEAD:config/routes.php
    '/showTasks' => 'Application#showTasks', 
);
>>>>>>> 03cbd1e (modificaciones en view create):phpInitialDemo-main/config/routes.php
=======
    '/showTasks' => 'Application#showTasks'
 
);
>>>>>>> 083ee4e (pruebas):phpInitialDemo-main/config/routes.php

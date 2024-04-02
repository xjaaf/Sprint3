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
	'/test' => 'test#index',
	'/' => 'application#prueba',

	'/prueba' => 'application#prueba'

=======
	'/' => 'Application#showTasks',
	'/createTask' => 'Application#createTask'
>>>>>>> d756344 (forma created):phpInitialDemo-main/config/routes.php
);

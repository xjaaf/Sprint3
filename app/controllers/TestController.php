<?php

class TestController extends ApplicationController
{
	public function indexAction()
	{
		$this->view->message = "hello from test::index";
	}
	
	public function checkAction()
	{
		echo "hello from test::check";
<<<<<<< HEAD:app/controllers/TestController.php
<<<<<<< HEAD:app/controllers/TestController.php
=======
	
>>>>>>> d2180e1 (borrados de pruebas):phpInitialDemo-main/app/controllers/TestController.php
=======
	
>>>>>>> develop:phpInitialDemo-main/app/controllers/TestController.php
	}
}
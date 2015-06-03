<?php
/*
	The controller core, allows us to access methods like view, model, to load models and rendew the views.
*/

class Controller{
	
	public function model($model){
		require_once $_SERVER['FILE_ROOT'].'/app/models/'. $model.'.php'; //uses the file for the model that is passed in to the controller
		return new $model();//constructs and returns a new object which is the model of the name that is passed in to the function.
	}

	public function view($view){
		include_once $_SERVER['FILE_ROOT'].'/app/views/'. $view.'.php';
	}
}
?>

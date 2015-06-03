<?php

class Home extends Controller{

	public function index($data = ''){//default method we call
		$main = $this->model('Main');//references the parent method model($model_name), defines the user model

		//using the new object $user, we can apply the methods of the model User class, here we assign a name to user
		$this->view('home/index'); 

		//uses the parent method of view($viewLocation, $data[])
		//so it passes in 'home/index' and an array of data, which has one entry, name
		//=user->name
	}
}

?>
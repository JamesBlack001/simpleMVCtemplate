<?php

/**
 * Used along side the controllers to hep in the construction of new pages, without needing to create a new
 * file for each page.
 */
	
	/**
	 * A parent app class, that enables us to parse and route urls.
	 */
	class App{

		protected $controller = 'home';//default controller

		protected $method = 'index';//default method

		protected $params = [];//an array for any parameters to pass through from URL to method
		
		/**
		 * [__construct description]
		 */
		public function __construct(){
			$url=$this->parseUrl();

			if(file_exists($_SERVER['FILE_ROOT'].'/app/controllers/'. $url[0] .'.php')){//tests to see if there is such a file that has been written into the url
				$this->controller =$url[0];//reassigns the value for controller to the of $url[0]
				unset($url[0]);//unsets the value defined for $url[0]
			}
			else{die('Location doesn\'t exist');}

			require_once $_SERVER['FILE_ROOT'].'/app/controllers/'.$this->controller.'.php';

			$this->controller= new $this->controller;

			if(isset($url[1])){//checks to see if there is a value for $url[1]
				if(method_exists($this->controller, $url[1])){ //checks to see if the value for $url1 is a defined method for the object $this->controller
					$this->method = $url[1];//assigns the value of $method to that of $url[1]
					unset($url[1]);
				}
			}

			$this->params = $url ? array_values($url) : [];//does two things, first checks if it isn't then makes it empty if so,
			//otherwise rebases that array to 0 with values that are defined in the values for params

			call_user_func_array([$this->controller,$this->method], $this->params);
			//callback using ([classname,method], params)
		}

		public function parseUrl(){//allows us to analyse the paramaters that are part of the url, and cast them all to an array
			if(isset($_GET['url'])){

				
				/*
					use rtrim to trim this to protect against errors formed from additional trailing forward slashes,
					we need to sanitize by using filter_var, and option -Filter_sanitize_url (removes illegal characters from the string)
					also need to explode the passed URL to seperate each string by a particular variable in this case "/"
				 */
				return $url =explode('/',filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL));
			} 
		}
	}
?>
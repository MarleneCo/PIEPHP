<?php

namespace Core;


Class Core
{
	public function run(){
		if(!empty($_GET)){
			$controller_name = 'Controller\\'.ucfirst($_GET['c']).'Controller';
			$action = $_GET['a'].'Action';

		}else{

		$url  = str_replace(BASE_URI,'',$_SERVER['REQUEST_URI']);
			//var_dump($url);
			if ($url == '/'){
				$controller_name = 'Controller\\AppController';
				$action = 'indexAction';
				//echo $controller_name;
				//echo $action;
			}else{
				//var_dump(trim($url,'/'));
				$url = trim($url,'/');
				if (strpos($url,'/')){
					$array = explode('/',$url);
					$controller_name = 'Controller\\'.ucfirst($array[0]).'Controller';
					$action = $array[1].'Action';
				}else{
					$controller_name = 'Controller\\'.ucfirst($url).'Controller';
					$action = 'indexAction';
				}
			}
		}
		var_dump($controller_name);
		var_dump(class_exists('UserController'));
		var_dump(method_exists($controller, $action));
		if(class_exists($controller_name)){
			$controller = new $controller_name();
			if(method_exists($controller, $action)){
				$controller->{$action};
				var_dump($controller_name);
			}
		}else{

			die('error 404');
		}
		echo $controller_name;
		echo $action;
		/*$_controller = isset($GET['controller'])?($GET['controller']):'index';
		$_action = isset($GET['action'])?($GET['action']):'Action';
		$controller_name = ucfirst($_controller).'Controller';
		if( file_exists($controller_name)){
			$_controller = new $controller_name();
			if(method_exists($_controller, $_action)){
				$_controller->{$_action};
			}
		}else{
			
			die ('error 404');

		}

		//echo __CLASS__ . "[OK]". PHP_EOL;*/
	}
} 
?>
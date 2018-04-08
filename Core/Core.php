<?php

namespace Core;
use Core\Router;


class Core
{
	public function run(){

		//var_dump($_SERVER);
		//var_dump(BASE_URI);
		
		$url = str_replace(BASE_URI,'',$_SERVER['REQUEST_URI']);
		$route = Router::get($url);
		$r = ['marlene', 'pamela', 'rachid'];
		//var_dump($r);
		//var_dump($route);
		//var_dump($route);
		//var_dump($route['controller']);

		$c = $route['controller'];
		$action = $route['action'];
		$controller_name ='Controller\\'. ucfirst($c).'Controller';
		//var_dump($controller_name);
		//var_dump($action);
		/*var_dump($c, $a);
		var_dump($route);*/

		if (class_exists($controller_name) && method_exists($controller_name, $action)){
			$controller = new $controller_name();
			$controller->$action();
		} 

			/*if (class_exists($controller_name) && method_exists($controller_name,$action)){

			$controller = new $controller_name();

				$controller->$action();

			}
		
				/*if(!empty($_GET)){
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
					$action = $array[1];
					//var_dump($controller_name);
					//var_dump($action);
				}else{
					$controller_name = 'Controller\\'.ucfirst($url).'Controller';
					$action = 'indexAction';
				}
			}
		}

		if(class_exists($controller_name) && method_exists($controller_name,$action)){

			$controller = new $controller_name();

				$controller->$action();
				

		}else{

			die('error 404');
		}
		echo $controller_name;
		echo $action;*/
	}
} 
?>
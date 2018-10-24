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
		//$r = ['marlene', 'pamela', 'rachid'];
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
	}
} 
?>
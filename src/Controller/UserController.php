<?php
namespace Controller;
use Core\Controller;

class UserController extends Controller
{
	public function add(){
	$this->render('register');
	}

	public function show () {
		//var_dump($this->render);
		$this->render('register');
		//echo ' show show view show';
	}
}
?>
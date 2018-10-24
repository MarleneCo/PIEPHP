<?php
namespace Controller;
use Core\Controller;
use Core\Database;

class UserController extends Controller
{
	public function add(){
	$this->render('register');
	}

	public function save(){
		$user = new UserModel();
		$test = $user->save();
	$this->render('register');
	}

	/*public function show () {
		//var_dump($this->render);
		$this->render('register');
		//echo ' show show view show';
	}*/

	public function registerAction(){
		echo "redirection faite";
	}
}
?>
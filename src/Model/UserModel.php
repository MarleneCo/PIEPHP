<?php
namespace Model
use Database;
	Class UserModel
	{

		//private $_email;
		//private $_password;

		public function save(){
			echo "je rentre dans la fonction";
			/*$bdd = Database::bdd_connection();
			$request = $bdd->prepare("INSERT INTO users (email,password) VALUES (?,?)");
			$result = $request->execute([$_email,$_password]);
			return $result;*/

		}
	}
?>
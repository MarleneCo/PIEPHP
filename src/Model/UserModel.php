<?php
namespace Model

	Class UserModel extends BrouillonModel
	{
		private $_email;
		private $_password;

		public function save($_email, $_password){

			$bdd = BrouillonModel::bdd_connection();
			$request = $bdd->prepare("INSERT INTO users (email,password) VALUES (?,?)");
			$result = $request->execute([$_email,$_password]);
			return $result;

		}
	}
?>
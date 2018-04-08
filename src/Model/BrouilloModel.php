<?php
	Class Model
	{
		const HOST ='localhost';
		const DBNAME = 'piephp';
		const NAME = 'root';
		const PSW ='';

		private static $_instance = NULL;

		public static function bdd_connection(){
			if (!isset(self::$_instance)){
				$option = array (PDO :: ATTR_PERSISTENT => true;
					PDO :: ATTR_ERRMODE => ERRMODE_EXCEPTION);
				self::$_instance = new PDO ('mysql_host='.SELF::HOST.'dbname='.SELF::DBNAME,SELF::NAME,SELF::PSW,$option);
			}
		return self::$_instance;
		} 
	}
?>
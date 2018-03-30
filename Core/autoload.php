<?php
spl_autoload_register(function($file){
	//echo $file;

	if (file_exists($file.".php")){
		include($file.".php");
	}else{
		if(file_exists("src".DIRECTORY_SEPARATOR.$file.".php")){
			include ("src".DIRECTORY_SEPARATOR.$file.".php");
		}else{
			echo "file not exiting".PHP_EOL;
			return;
		}
	}
});

?>
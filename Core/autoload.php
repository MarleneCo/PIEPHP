<?php
spl_autoload_register(function($file){
	//echo $file;

	if (file_exists($file.".php")){
		include($file.".php");
	}else{
		echo "file not exiting".PHP_EOL;
	}
});

?>
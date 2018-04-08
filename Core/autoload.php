<?php
function autoload ($file)
{
	//echo $file;
	$f = $file . '.php'; 
	if (file_exists($f)){
		include($f);
	}else{
		$f = 'src' . DIRECTORY_SEPARATOR . $f;
		if(file_exists($f)){
			include ($f);
		}else{
			echo "file not exiting".PHP_EOL;
			return;
		}
	}
}
spl_autoload_register('autoload');

?>
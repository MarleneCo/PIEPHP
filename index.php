<h1>Index principal</h1>
<?php
var_dump($_SERVER);
//var_dump(BASE_URI);
var_dump($_POST);
var_dump($_GET);
 
 //echo BASE_URI;

define('BASE_URI', str_replace('\\','/', substr(__DIR__, strlen($_SERVER['DOCUMENT_ROOT']))));
echo BASE_URI .PHP_EOL;

require_once(implode(DIRECTORY_SEPARATOR,['Core', 'autoload.php']));

$app = new Core\Core();
$app->run();

 ?>

<h1>Index principal</h1>
<?php

define('BASE_URI', str_replace('\\','/', substr(__DIR__, strlen($_SERVER['DOCUMENT_ROOT']))));
echo "ceci est le BASE_URI: ->".BASE_URI.PHP_EOL;

require_once(implode(DIRECTORY_SEPARATOR,['Core', 'autoload.php']));
include('routes.php');
$app = new Core\Core();
$app->run();

 ?>

<?php
namespace Core;
// devoir écrites toutes mes routes via la methode connect de la class Router
Router::connect('/',['controller' =>'app','action' => 'index']);
Router::connect('/user/show', ['controller' => 'user', 'action' => 'show']);
Router::connect('/user/add', ['controller' => 'user', 'action' => 'add']);
Router::connect('/film/title', ['controller' => 'film', 'action' => 'title']);
?>


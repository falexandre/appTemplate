<?php
require 'config/config.php';


//inclusão das ROTAS
$controllerDir = opendir( ROOT . CONTROLLERS_PATH ); 

while ($controller = readdir($controllerDir)) { 
if($controller != '.' && $controller != '..') 
	require ROOT . CONTROLLERS_PATH . $controller; 
} 

//inicia renderização template
$app->run();



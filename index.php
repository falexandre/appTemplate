<?php
require 'config/config.php';


//inclusão das ROTAS
$controllerDir = opendir('./controllers/'); 

while ($controller = readdir($controllerDir)) { 
if($controller != '.' && $controller != '..') 
	require CONTROLLERS_PATH . $controller; 
} 


//inicia renderização template
$app->run();



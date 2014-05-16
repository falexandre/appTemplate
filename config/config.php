<?php

//Definições
define(	'ROOT'				,	 dirname( dirname( __FILE__ ) ) 	); //indica pasta raiz
define( 'DS'				,	 DIRECTORY_SEPARATOR 				); //Diretório separador
define( 'DATAUSER'			,	 '' 								); //Nome do Usuario banco de dados
define( 'DATAPASS'			,	 '' 								); //Senha do banco de dados
define( 'DATABASE'			,	 '' 								); //Nome do banco de dados
define( 'VIEWS_PATH'		,	 './views/' 						); 
define( 'CONTROLLERS_PATH'	,	 './controllers/'					); 
 
//includes necessários
require ROOT . DS . 'vendor' . DS . 'autoload.php';
require 'autoload.php';

//conexão banco de dados PHPActiveRecord
/*$cfg = ActiveRecord\Config::instance();
$cfg->set_model_directory( ROOT. 'models' );
$cfg->set_connections( array('development' =>   'mysql://'.DATAUSER.':'.DATAPASS.'@'localhost'/'.DATABASE ) );
*/

//seta VIEWS do template
$app = new \Slim\Slim(array(
	'debug' => true,
	'templates.path' => ROOT . VIEWS_PATH
));

//Quando gerar um 404 renderiza a view 404
$app->notFound(function () use ($app) {
    $app->render('404.php');
});

//envia os erros para view personalizada de erros, para isso o debug a cima tem que estar false
$app->error( function( \Exception $e ) use ( $app ) {

	$erros = array(

			'mensagem' => $e->getMessage(),
			'arquivo'  => $e->getFile(),
			'linha'    => $e->getLine(),

    );

    $app->render( 'error.php' , $erros );

});


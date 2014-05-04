<?php


ini_set( 'display_errors' , 1 );

//Definições
define(	'ROOT'			,	 dirname( dirname( __FILE__ ) ) 	);
define( 'DS'			,	 DIRECTORY_SEPARATOR 				); 
define( 'DATANAME'		,	 '' 								); 
define( 'DATAPASS'		,	 '' 								);
define( 'DATABASE'		,	 '' 								); 
 
//includes necessários
require ROOT . DS . 'vendor' . DS . 'autoload.php';
require 'autoload.php';

//conexão banco de dados PHPActiveRecord
/*$cfg = ActiveRecord\Config::instance();
$cfg->set_model_directory( ROOT. 'models' );
$cfg->set_connections( array('development' =>   'mysql://'.DATANAME.':'.DATAPASS.'@'localhost'/'.DATABASE ) );
*/

//seta VIEWS do template
$app = new \Slim\Slim(array(
	'debug' => true,
	'templates.path' => ROOT . './views/'
));


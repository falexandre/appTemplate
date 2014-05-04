<?php

function AutoLoaderClassTemplate($classe){
	$path	= str_replace( '\\' , '/' , $classe );
	require ROOT . DS . 'classes' . $path . '.php';
}
spl_autoload_register('AutoLoaderClassTemplate');
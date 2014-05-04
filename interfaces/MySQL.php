<?php

namespace app\interfaces;

interface MySQL{
	public static function cadastrar($attributes);
	public static function listar();
	public static function atualizar($id,$attributes);
	public static function deletar($id);
	public static function encontrar( $campo , $valor , $tipo );
}
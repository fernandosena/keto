<?php
date_default_timezone_set('America/Sao_Paulo');

$IPwan = $_SERVER['REMOTE_ADDR'];

ini_set('display_errors',0);

error_reporting(0);
require_once ("class/CONFIG.php");

spl_autoload_register("myload");
function myload($class){
	require_once $class.".class.php";
}
if(BD::conn()=="erro"){
	include_once "pages/erroConexao.php";
	exit;
}else{
	BD::conn();
	$funcoes = new FUNCOES();
	$dieta = new Dieta();	
}
<?php
	
    /*     CONEXÃO AO BANCO DE DADOS
    ***********************************/
	class BD{
		private static $conn;
		public static function conn(){
			if(is_null(self::$conn)){
				try{
					self::$conn=new PDO('mysql:host='.HOST.';dbname='.DB.'',''.USER.'',''.PASS.'');
					self::$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
					self::$conn->query("SET NAMES utf8");
				}catch(\Exception $erro){
					return "erro";
				}
			}
			return self::$conn;
		}
	}
?>
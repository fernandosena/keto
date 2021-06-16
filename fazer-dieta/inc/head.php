<?php
	date_default_timezone_set('America/Sao_Paulo');

	require_once "class/CONFIG.php";

	$IPwan = $_SERVER['REMOTE_ADDR'];

	ini_set('display_errors',0);

	error_reporting(0);

	spl_autoload_register("myload");

	function myload($class){
		if(!strstr($class,"PagSeguro")){
			require_once "class/".$class.".class.php";
		}
	}if(BD::conn()=="erro"){
		include_once "pages/erroConexao.php";
		exit;
	}else{
		BD::conn();
		$funcoes = new FUNCOES();
	}
	$url = (isset($_GET['url'])) ? htmlentities(strip_tags($_GET['url'])):"";
	$parametro = explode("/",$url);
	
	//PEGA OS DADOS DO USUARIO LOGADO
	if(isset($_SESSION['idUser'])){
		$id = (Int) $_SESSION['idUser'];
		$dadosUser = array(
			"id"=>"$id"
		);
		$logadoDados = $funcoes->consulta("t_usuarios",$dadosUser);
		if($logadoDados->rowCount() != 0){
			$logado = $logadoDados->fetchObject();
		}else{
			session_destroy();
		}
	}
?>

<meta charset="utf-8">
<title>Torneio - MaquinaBot</title>
<meta content="width=device-width, initial-scale=1.0" name="viewport">
<meta content="" name="keywords">
<meta content="" name="description">
<link href="<?php echo PATH?>img/favicon.ico" rel="icon">
<link href="<?php echo PATH?>img/favicon.ico" rel="apple-touch-icon">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">
<link href="<?php echo PATH?>lib/bootstrap/css/bootstrap.min.css" rel="stylesheet"><link href="<?php echo PATH?>lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
<link href="<?php echo PATH?>lib/animate/animate.min.css" rel="stylesheet">
<link href="<?php echo PATH?>lib/ionicons/css/ionicons.min.css" rel="stylesheet">
<link href="<?php echo PATH?>lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
<link href="<?php echo PATH?>lib/lightbox/css/lightbox.min.css" rel="stylesheet">
<link href="<?php echo PATH?>css/style.css" rel="stylesheet">
<link href="<?php echo PATH?>css/estilo.css" rel="stylesheet">
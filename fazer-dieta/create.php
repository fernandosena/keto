<?php
require_once ("class/autoload.php");

$dados = $_POST;
/*$dados = '{
    "age": "22",
    "gender": "Male",
    "current_i_weight": "Male"
}';*/
//$json = json_encode($dados);
$array = [];
if(!empty($dados)){
	$json = json_encode($dados);
	$arrJson = json_decode($json, true);
	$array['link'] = $funcoes->geradorCodigo(30);
	$array['gender'] = $arrJson['gender'];
	$array['age'] = $arrJson['age'];
	$array['current_i_weight'] = $arrJson['current_i_weight'];
	$array['height'] = $arrJson['height'];
	$array['height_i_ft'] = $arrJson['height_i_ft'];
	$array['meal'] = implode(",",$arrJson['meal']);
	$array['meal_tag_meat'] = implode(",",$arrJson['meal_tag_meat']);
	$array['meal_tag_other'] = implode(",",$arrJson['meal_tag_other']);
	$array['meal_tag_veg'] = implode(",",$arrJson['meal_tag_veg']);
	$array['metric'] = $arrJson['metric'];
	$array['target_i_weight'] = $arrJson['target_i_weight'];
	$array['target_weight'] = $arrJson['target_weight'];
	$array['weight'] = $arrJson['weight'];

	try{
		$cadastrarDados = $funcoes->cadastrar(TABLE_OBTER_DIETA,$array);
		$retorno = ["success"=>true, "clickBankUrl"=>CONF_URL_BASE."/final.php?link=".$array['link']];
	}catch(Expensive $e){
		$retorno = ["success"=>false, "clickBankUrl"=>$array['link']];
	}
	echo json_encode($retorno);
}else{
	echo 'Você não pode acessar essa página';
}


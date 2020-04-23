<?php 
use application\controllers\CurencyController;
		include '../application/models/ModelCurency.php';
		include '../application/controllers/CurencyController.php';

if(isset($_POST['data'])) {
	if(!isJSON($_POST['data'])) {
		echo "Не правильно ввели данные";
		die();		
	}
	
	$data = new CurencyController($_POST['data']);
	$data = $data->get_checkoutPrice();		
	// echo $data;
	die();
}

function isJSON($string){
	return is_string($string) && is_array(json_decode($string, true)) ? true : false;
}
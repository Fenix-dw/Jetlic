<?php 
use application\controllers\CurencyController;
use application\core\Controller;

class Controller_Main extends Controller
{	
		
	function action_index()
	{	
		$checkoutPrice =  '{"items":{"42":{"currency":"EUR","price":49.99,"quantity":1},"55":{"currency":"USD","price":12,"quantity":3}},"checkoutCurrency": "EUR"}';

		$data = new CurencyController($checkoutPrice);
		$data = $data->get_checkoutPrice();
		$this->view->generate('main_view.php', $data);
	}
}
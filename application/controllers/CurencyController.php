<?php 
namespace application\controllers;

use application\models\ModelCurency;
use application\core\Controller;

/**
 * 
 */
class CurencyController 
{	
	private $checkoutPrice;

	function __construct($checkoutPrice = false)
	{	
		$this->checkoutPrice = $checkoutPrice;
		$this->model = new ModelCurency();
	}	

	function get_checkoutPrice() 
	{	
		$checkoutPrice = json_decode($this->checkoutPrice);
		$response['checkoutPrice'] = 0;
		foreach ($checkoutPrice->items as $key => $value) {
			$rate = $this->model->get_data($value->currency);
			$response['checkoutPrice'] += $value->price * $value->quantity * $rate;
		}
		$response['checkoutCurrency'] = $checkoutPrice->checkoutCurrency;
		$rate = $this->model->get_data($response['checkoutCurrency']);
		$response['checkoutPrice'] *= $rate; 
		$response['checkoutPrice'] = round(str_replace(',','.',$response['checkoutPrice']), 2); 
		return json_encode($response);

	}
}
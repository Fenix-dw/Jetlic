<?php 
namespace application\models;
/**
 * 
 */
class ModelCurency
{
	
	function get_data($currency = false)
	{
		$languages = json_decode(file_get_contents("https://openexchangerates.org/api/latest.json?app_id=bc18f4aa1bc2469ca4e7477e971f7396"));
		//валюты
		foreach ($languages->rates as $key => $value) {
		if ($key == $currency ) { //тип валюты
		return round(str_replace(',','.',$value), 2); //ее значение
		} }
	}
}
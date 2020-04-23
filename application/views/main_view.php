<form id="form">
	<p>	
		<p>Введите данные!!!</p>
		<textarea name="data" id="data" cols="100" rows="10">{"items":{"42":{"currency":"EUR","price":49.99,"quantity":1},"55":{"currency":"USD","price":12,"quantity":3}},"checkoutCurrency": "EUR"}</textarea>
	</p>
	<p>
		<button type="submit">Отправить</button>		
	</p>
</form>

<div>
	<p>Ответ от сервера:</p>
	<p id="message">
		<?php var_dump($data); ?>
	</p>
</div>

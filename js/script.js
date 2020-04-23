jQuery(document).ready(function(){


	$('#form').on('submit', function(event) {
		event.preventDefault();
		$('#message').html();
		
		$.post('../inc/Ajax.php', {data: $('#data').val()}, function(data) {
			$('#message').html( data );
		});


	});

});
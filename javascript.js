

$('#lamp-on').on('click', function(){
	$.ajax({
		url: 'https://sgp1.blynk.cloud/external/api/update',
		type: 'get',
		dataType: 'json',
		data: {
			'token' : 'M8r1JtoTj2zF7UwGxDo9FUyBr-4Di7U7',
			'V8' : $('#on').val()
		},
		success: function(result){
			console.log(result);
		}
	});
});

$('#lamp-off').on('click', function(){
	$.ajax({
		url: 'https://sgp1.blynk.cloud/external/api/update',
		type: 'get',
		dataType: 'json',
		data: {
			'token' : 'M8r1JtoTj2zF7UwGxDo9FUyBr-4Di7U7',
			'V8' : $('#off').val()
		},
		success: function(result){
			console.log(result);
			$('#info').html('<h1>Lampu nyala</h1>');
			$('#search-input').val('');
		}
	});
});

// $.ajax({
// 		url: 'https://sgp1.blynk.cloud/external/api/update',
// 		type: 'get',
// 		dataType: 'json',
// 		data: {
// 			'token' : 'M8r1JtoTj2zF7UwGxDo9FUyBr-4Di7U7',
// 			'V8' : $('#lamp').on('click', function(){
// 					$('#lamp').val();
// 			})
// 		},
// 		success: function(result){
// 			console.log(result);
// 			$('#info').html('<h1>Lampu nyala</h1>');
// 			$('#search-input').val('');
// 		}
// 	});
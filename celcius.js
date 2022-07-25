$(document).ready(function(){
	selesai();
});

function selesai()
{
	setInterval(function(){
		update();
		selesai();
	}, 500);
}

function update(){
	$.getJSON('https://blynk.cloud/external/api/get?token=M8r1JtoTj2zF7UwGxDo9FUyBr-4Di7U7&V1', function(data){
		$('#data').html('<div>' + data + ' C</div>');
	});

}
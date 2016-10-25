if (window.jQuery) {
		console.log('Ada');
	} else{
		console.log('TD');
	}
$("#submit").submit(function(e){
	var submitform = $(this).serialize();
	$.ajax({
		method: "POST",
		url :"proses.php",
		data:submitform
	})
	.done(function(msg){
		console.log(msg);
	})
	e.preventDefault();
});
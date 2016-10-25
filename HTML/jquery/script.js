if (window.jQuery) {
		console.log('Ada');
	} else{
		console.log('TD');
	}
$('h1').click(
	function () {
		$('h3').toggle();
	}
);
$('#nama').keyup(function(){
	$('#nk').html($(this).val());
}
	);

$("#hasil").click(
	
		function(){
			var p1,p2,op,s;
			p1=$('#p1').val();
			p2=$('#p2').val();
			op=$('#op').val();
			// if (op=="+") {
				s=eval(parseInt(p1) + op + parseInt(p2));
				$("h2").text(s);
			// }
			// else if (op == "-") {
			// 	s=parseInt(p1)-parseInt(p2);
			// 	$("h2").text(s);
			// }
			// else if (op == "*") {
			// 	s=parseInt(p1)*parseInt(p2);
			// 	$("h2").text(s);
			// }
			// else if (op == "/") {
			// 	s=parseInt(p1)/parseInt(p2);
			// 	$("h2").text(s);
			// } 
		}
	);
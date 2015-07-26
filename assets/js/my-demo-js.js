$(document).ready(function(){

	$(".mybtn").click(function() {
		var str="";
		for (var i=1; i <= 10; i++) {
			str+="5*"+i+" = "+(5*1)+"<br/>";
		};
		$(".mydiv").html(str);
	});

});
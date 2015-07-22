$(document).ready(function() {
	$("#create_account").click(function () {

		// var btn = $(this);

		// $("#create_account").css('color','#F00');
		// btn.addClass("btn-success");
		// btn.addClass("acmncmn");
		// btn.hide();

		// alert($("#my_para").html());
		// $("#my_para").html("Hello this is dynamic text");
		// setTimeout(function() {
		// 	$("#my_para").hide();
		// } , 3000);	

		// console.log($("#user_name").val());

		// $("#user_name").addClass('my-class').addClass('form-control');

		console.log($("#para_container").find('.my_para').html("Thisiasiahiasi"));

	});


	$(".menus").click(function() {
		// $(this).closest('.lis').find('.sub-nav').toggleClass('hidden');
		var sub_nav = $(this).closest('.lis').find('.sub-nav');
		if(sub_nav.hasClass('hidden')) {
			sub_nav.removeClass('hidden');
		}
		else {
			sub_nav.addClass('hidden');	
		}
	});

});
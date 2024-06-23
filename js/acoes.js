$(document).ready(function(){
	

	$("a").on("click", function(){
		$(".modal").modal("show");
	});
	$(".fas.fa-bars").on("click", function(){
		$(".header-links ul").css({"display":"block"});
		$(this).hide();
		$(".fas.fa-times").css({"display":"block"});
	});
	$(".fas.fa-times").on("click", function(){
		$(".header-links ul").css({"display":"none"});
		$(this).hide();
		$(".fas.fa-bars").css({"display":"block"});
	});


});
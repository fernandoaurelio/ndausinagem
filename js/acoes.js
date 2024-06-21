$(document).ready(function(){
	$(".toggle-menu").on("click", function(){
		$("ul").css({"display": "block"});
		$("i.fas.fa-bars").css({"display": "none"});	
		$("i.fas.fa-times").css({"display": "block"});	
	
	});
	$("i.fas.fa-times").on("click", function(){
		$("ul").css({"display": "none"});
		$("i.fas.fa-times").css({"display":"none"});
		$("i.fas.fa-bars").css({"display":"block"});
	});
});
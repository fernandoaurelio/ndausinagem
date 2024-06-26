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
	$(".orcamento").on("click", function(){
		$(".modal-formulario").load("forms/form-orcamento.php");
		$(".modal-title").html("Orçamento");
	});
	$(".fale-conosco").on("click", function(){
		$(".modal-formulario").load("forms/fale-conosco.php");
		$(".modal-title").html("Fale Conosco");
	});

	$(function(){
		$(".enviar").on("click", function(){
			var email = $("input[name='email']").val();
			var nome = $("input[name='nome']").val();
			var telefone = $("input[name='telefone']").val();
			var empresa = $("input[name='empresa']").val();
			var servico = $("input[name='servicos-usinagem']").val();
			var cargo = $("input[name='cargo']").val();
			var urgencia = $("input[name='urgencia']").val();
			var mensagem = $("input[name='mensagem']").val();

			if(!email){
				$("input[name='email']").addClass("input-vazio");
				return false;
			};
			if(!nome){
				$("input[name='nome']").addClass("input-vazio");
				return false;
			};
			if(!telefone){
				$("input[name='telefone']").addClass("input-vazio");
				return false;
			};
			if(!empresa){
				$("input[name='empresa']").addClass("input-vazio");
				return false;
			};					
		

				$.ajax({
					url:'./mailconfig.php',
					type: 'POST',
					data: $('.formulario').serialize(),
					success: function(data){
						$('.modal-body').html(data);
						console.log(data);
					}
				});
				return false;

		});
	});


});
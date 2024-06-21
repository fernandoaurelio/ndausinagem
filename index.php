<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/styles.css">
	<title>NDA Usinagem</title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
	<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
</head>
<body>
	<header>
		<div class="header-container">
			<div class="header-logo">
				<img src="img/logo_semfundo.png" alt="">
			</div>
			<div class="header-links">
				<ul>
					<li><a href="#">Home</a></li>
					<li><a href="#">Empresa</a></li>
					<li><a href="#">Orçamento</a></li>
					<li><a href="#">Fale conosco</a></li>
				</ul>
				<div class="toggle-menu">
					<i class="fas fa-bars"></i>
					<i class="fas fa-times"></i>
				</div>
			</div>
		</div>
	</header>
	<section class="banner-home">
		<div class="texto-banner">
			<div class="texto-interno">
				<strong>NDA: Nada além da perfeição em usinagem</strong>
			</div>
			<div class="btn-banner">
				<a href="#">Saiba Mais</a>
			</div>
		</div>
		<img src="img/banner.jpg" alt="">
	</section>
	<section class="negocio">
		<div class="negocio-container clearfix">
			<h1><strong>Unidade de Negócio</strong></h1>
			<ul>
				<li>
					<div class="icon-container">
						<div class="icon" style="background-image: url('img/cnc_icon.png');"></div>
						<h5>Torneamento CNC</h5>
					</div>
				</li>
				<li>
					<div class="icon-container">
						<div class="icon"  style="background-image: url('img/fresa_icon.png');"></div>
						<h5>Fresamento CNC</h5>
					</div>
				</li>
				<li>
					<div class="icon-container">
						<div class="icon"  style="background-image: url('img/retifica_icon.png');"></div>
						<h5>Retificação</h5>
					</div>
				</li>
				<li>
					<div class="icon-container">
						<div class="icon"  style="background-image: url('img/furacao_icon.png');"></div>
						<h5>Furação e Rosqueamento</h5>
					</div>
				</li>
			</ul>
		</div>
	</section>
	<section class="estrutura ">
		<div class="estrutura-container clearfix">
			<div class="estrutura-texto">
				<h1>Nossa Estrutura</h1>
				<div class="estrutura-img">
					<img src="https://www.winterf.com.br/images/img-empresa-1.jpg" alt="">
				</div>
				<p>Com 1.000m² de área construída, o parque industrial da Legado Usinagem tem à disposição maquinário de ponta para atender projetos personalizados e de alta complexidade. Entre eles, centros de usinagem de 3 e 5 eixos simultâneos de até 3.000mm, torno CNC e mecânico de até 6.000mm, caldeiraria com solda MIG, TIG e plasma, tratamento térmico para pequenas peças, além de laboratório de metrologia equipado com braço de medição tridimensional, Laser Tracker, tridimensional CMM e instrumentos calibrados e rastreados RBC.</p>
				<div class="estrutura-btn-container">
					<a href="#" class="btn-estrutura">Saiba Mais</a>
				</div>

			</div>
		</div>
	</section>
	<section class="certificado">
		<div class="certificado-container clearfix">
			<h1><strong>Certificações</strong></h1>
			<ul>
				<li>
					<div class="icon-container">
						<div class="icon" style="background-image: url('img/cnc_icon.png');"></div>
						<h5>ISO 9000</h5>
					</div>
				</li>
				<li>
					<div class="icon-container">
						<div class="icon"  style="background-image: url('img/fresa_icon.png');"></div>
						<h5>ISO 9001</h5>
					</div>
				</li>
				<li>
					<div class="icon-container">
						<div class="icon"  style="background-image: url('img/retifica_icon.png');"></div>
						<h5>ISO 3000</h5>
					</div>
				</li>				
			</ul>
		</div>
	</section>
	<footer>
		<!-- Seção de Links do Site -->
		<section class="footer-container">
			<!-- Seção de Logo -->
			<div class="footer-section footer-logo">
				<img src="img/logo_semfundo.png" alt="Logo">
			</div>
			<div class="footer-section footer-links">
				<h3>Links do Site</h3>
				<ul>
					<li><a href="#">Home</a></li>
					<li><a href="#">Empresa</a></li>
					<li><a href="#">Orçamento</a></li>
					<li><a href="#">Fale conosco</a></li>
				</ul>
			</div>

			<!-- Seção de Endereço -->
			<div class="footer-section">
				<h3>Endereço</h3>
				<p>R. Perpétua Borges Cunha - Jarivatuba, Joinville - SC, 89230-000</p>
				<div class="btn-footer-container">
					<div class="btn-footer">
						<a href="#" class="mapa">Acesse pelo Google Maps</a>
					</div>
				</div>
			</div>

			<!-- Seção de Botões -->
			<div class="footer-section footer-buttons">
				<h3>Contato</h3>
				<button onclick="window.location.href='https://wa.me/seunumero'">WhatsApp</button>
				<button onclick="window.location.href='mailto:seuemail@exemplo.com'">Email</button>
			</div>
		</section>
	</footer>
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script src="js/acoes.js"></script>
</body>
</html>
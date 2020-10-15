<!DOCTYPE html>
<html lang="pt-br">

<head>

	<link rel="shortcut icon" href="imagens/fav.ico">
	<meta charset="UTF-8">
	<!-- Site Title -->
	<title>Mr.Academy</title>
	<!--
		CSS
		============================================= -->
  <link rel="stylesheet" href="css/linearicons.css">
  <link rel="stylesheet" href="css/themify-icons.css">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/owl.carousel.css">
  <link rel="stylesheet" href="css/main.css">
  <link href="carousel.css" rel="stylesheet">
</head>




	<!-- Start Header Area -->
<body>

	<!-- Start Header Area -->
	<header class="header_area sticky-header">
		<div class="main_menu">
			<nav class="navbar navbar-expand-lg navbar-light main_box">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<a class="navbar-brand logo_h" href="index.html"><img src="imagens/logo.png" width="150px"></a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
					 aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
						<ul class="nav navbar-nav menu_nav ml-auto">
							<li class="nav-item active"><a class="nav-link" href="index.html">Início</a></li>
							<li class="nav-item submenu dropdown">
								<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
								 aria-expanded="false">Materiais didáticos</a>
								<ul class="dropdown-menu">
									<li class="nav-item"><a class="nav-link" href="">Português</a></li>
									<li class="nav-item"><a class="nav-link" href="">Inglês</a></li>
									<li class="nav-item"><a class="nav-link" href="">Matemática Discreta</a></li>
									<li class="nav-item"><a class="nav-link" href="">Laboratório de Hardware</a></li>
									<li class="nav-item"><a class="nav-link" href="">Administração Geral</a></li>
									<li class="nav-item"><a class="nav-link" href="">Algoritmos e Lógica de Programação</a></li>
									<li class="nav-item"><a class="nav-link" href="">Arquitetura e Organização de Computadores</a></li>
								</ul>
							</li>
							<li class="nav-item submenu dropdown">
								<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
								 aria-expanded="false">Meu Perfil</a>
								<ul class="dropdown-menu">
									<li class="nav-item"><a class="nav-link" href=".html">Editar Perfil</a></li>
									<li class="nav-item"><a class="nav-link" href="html">Meus pedidos</a></li>
									<li class="nav-item"><a class="nav-link" href=".html">Minha carteira</a></li>
								</ul>
							</li>
							<li class="nav-item"><a class="nav-link" href="#">Favoritos</a></li>
						</ul>
						<ul class="nav navbar-nav navbar-right">
							<li class="nav-item"><a href="#" class="cart"><span class="lnr lnr-cart"></span></a></li>
							<li class="nav-item">
								<button class="search"><span class="lnr lnr-magnifier" id="search"></span></button>
							</li>
						</ul>
					</div>
				</div>
			</nav>
		</div>
		<div class="search_input" id="search_input_box">
			<div class="container">
				<form class="d-flex justify-content-between">
					<input type="text" class="form-control" id="search_input" placeholder="O que você procura?">
					<button type="submit" class="btn"></button>
					<span class="lnr lnr-cross" id="close_search" title="Close Search"></span>
				</form>
			</div>
		</div>
	</header>
	<!-- End Header Area -->

	<!-- Start Banner Area -->
	<section class="banner-area organic-breadcrumb">
		<div class="container">
			<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
				<div class="col-first">
					<h1>Detalhes do Produto</h1>
				</div>
			</div>
		</div>
	</section>
	<!-- End Banner Area -->

	<!--================Single Product Area =================-->
	<div class="product_image_area">
		<div class="container">
			<div class="row s_product_inner">
				<div class="col-lg-6">
					<div class="s_Product_carousel">
						<div class="single-prd-item">
							<img class="img-fluid" src="img/product/1.png" alt="">
						</div>
						<div class="single-prd-item">
							<img class="img-fluid" src="img/product/2.jpg" alt="">
						</div>
						<div class="single-prd-item">
							<img class="img-fluid" src="img/product/3.jpg" alt="">
						</div>
					</div>
				</div>
				<div class="col-lg-5 offset-lg-1">
					<div class="s_product_text">
						<h3>Inglês Básico</h3>
						<h2>R$29,99</h2>
						<ul class="list">
							<li><a class="active" href="#"><span>Categoria</span>: Línguas Estrangeiras</a></li>
							<li><a href="#"><span>Disponibilidade</span> : Em estoque</a></li>
						</ul>
						<p>No material de inglês básico, os alunos desenvolvem suas habilidades comunicativas no novo idioma, encontram desafios e alcançam grandes conquistas através de video aula, jogos e muito mais.</p>
						<div class="card_area d-flex align-items-center">
							<a class="primary-btn" href="#">Comprar</a>
							
							<a class="icon_btn" href="#"><i class="lnr lnr-heart"></i></a>
							<a class="icon_btn" href="#"><i class="ti-bag"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--================End Single Product Area =================-->

	<!--================Product Description Area =================-->
	<section class="product_description_area">
		<div class="container">
			<ul class="nav nav-tabs" id="myTab" role="tablist">
				<li class="nav-item">
					<a class="nav-link" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Descrição</a>
				</li>
				
			</ul>
			<div class="tab-content" id="myTabContent">
				<div class="tab-pane fade" id="home" role="tabpanel" aria-labelledby="home-tab">
					<p>Nosso principal objetivo é desenvolver as habilidades fundamentais para a comunicação total do aluno: compreensão auditiva, leitura e escrita. Essa meta é alcançada através do material didático exclusivo, da plataforma virtual de aprendizagem, Mr. Academy, e de profissionais altamente qualificados e treinados para desenvolver esse material. Nosso metodo de material didático conta com jogos educativos, video aulas e texto educativo.</p>
					<p><center><h4>Contém</h4><p>
					<p>- Material didático "Inglês básico".pdf<br>
					   - Video Aulas <br>
					   - Games interativos</p></center>
				</div>
				
				</div>
			</div>
		</section>


<!-- Site footer -->
    <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-6">
            <h6>Sobre nós</h6>
            <p class="text-justify">A idealização deste site trata-se de um projeto integrador (PI), da instituição FATEC Jessen Vidal (São José dos Campos – SP).</p>
          </div>

          <div class="col-xs-6 col-md-3">
            <h6>Equipe</h6>
            <ul class="footer-links">
   			  <li><a href="https://www.linkedin.com/in/bryan-santos-77b53317b/" target="_blank">Bryan Santos</a></li>
              <li><a href="https://www.linkedin.com/in/juliane-freitas-9b6287163/" target="_blank">Juliane Freitas</a></li>
              <li><a href="https://www.linkedin.com/in/leticia-amorim-4761b1185/" target="_blank">Leticia Amorim</a></li>
              <li><a href="https://www.linkedin.com/in/pedro-ferreira-6a8417190/" target="_blank">Pedro Ferreira</a></li>
              <li><a href="https://www.linkedin.com/in/rogério-camargo-3a01191a5/" target="_blank">Rogério Camargo</a></li>
              <li><a href="https://www.linkedin.com/in/thomas-palma-0764b81b3/" target="_blank">Thomas Palma</a></li>
            </ul>
          </div>

          <div class="col-xs-6 col-md-3">
            <h6>Contato</h6>
            <ul class="footer-links">
              <li><a href="contato.php">Fale Conosco</a></li>
         	</ul>
          </div>
        </div>
        <hr>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-sm-6 col-xs-12">
            <p class="copyright-text">Copyright © 2020, Mr. Academy Inc. <a href="#"></a></p>
</footer>
	<!-- End footer Area -->


	<script src="js/vendor/jquery-2.2.4.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
	 crossorigin="anonymous"></script>
	<script src="js/vendor/bootstrap.min.js"></script>
	<script src="js/jquery.ajaxchimp.min.js"></script>
	<script src="js/jquery.nice-select.min.js"></script>
	<script src="js/jquery.sticky.js"></script>
	<script src="js/nouislider.min.js"></script>
	<script src="js/countdown.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/main.js"></script>
</body>

</html>
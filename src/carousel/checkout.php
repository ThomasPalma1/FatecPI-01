<?php
session_start();
include 'conexao.php'

?>

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
  <link href="select.css" rel="stylesheet">
</head>




	<!-- Start Header Area -->
<body>

	<!-- Start Header Area -->
	<header class="header_area sticky-header">
		<div class="main_menu">
			<nav class="navbar navbar-expand-lg navbar-light main_box">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<a class="navbar-brand logo_h" href="produtos.php"><img src="imagens/logo.png" width="150px"></a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
					 aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
						<ul class="nav navbar-nav menu_nav ml-auto">
							<li class="nav-item active"><a class="nav-link" href="produtos.php">Início</a></li>
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
									<?php
										if (isset($_SESSION['tipo_usuario']) && $_SESSION['tipo_usuario'] == "admin") {
											echo '<li class="nav-item"><a class="nav-link" href="add-product/add-product/add-product.php">Cadastrar Material</a></li>';
										}
									?>
									<li class="nav-item"><a class="nav-link" href="html">Meus pedidos</a></li>
									<li class="nav-item"><a class="nav-link" href=".html">Minha carteira</a></li>
								</ul>
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
					<h1>Checkout</h1>
				</div>
			</div>
		</div>
	</section>
	<!-- End Banner Area -->

    <!--================Checkout Area =================-->
    <section class="checkout_area section_gap">
        <div class="container">
            
            <div class="billing_details">

                <div class="row">
                	<?php

				$query = "select * from usuario";
    $result = mysqli_query ($conexao, $query);
    $row = mysqli_num_rows ($result);
    $user = mysqli_fetch_assoc($result);
					
				while($user = mysqli_fetch_assoc($result)){
                   echo(' <div class="col-lg-8">
                        <h3>Confirmar dados</h3>
                         <div class="form-row">
						    <div class="form-group col-md-6">
						      <label for="inputCity">Nome completo</label>
						      <input type="text" class="form-control" id="inputCity" value="'.$_SESSION['nome'].'">
						    </div>
						   
						       <div class="form-group col-md-6">
						      <label for="inputCity">CPF</label>
						      <input type="text" class="form-control" maxlength="11"  id="inputCity" placeholder="000.000.000-00">
						    </div>
						   <div class="form-group col-md-6">
						      <label for="inputCity">E-mail</label>
						      <input type="text" class="form-control" id="inputCity" value="'.$_SESSION['email'].'">
						    </div>
						</div> ');
                   }
                   ?>

                   <br>
 
                        <div class="billing_details">
                		<div class="row">

                            <div class="col-lg-8">

                            <h3>Pagamento</h3>
                            <div class="form-check">
							  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
							  <label class="form-check-label" for="exampleRadios1">
							    Cartão de crédito

							   <hr/> 
							  </label>
							</div>
                         	<h6></h6>
                     <form>
						  <div class="form-row">
						    
						  </div>
						  <div class="form-group">
						    <label for="inputAddress">Titular do cartão</label>
						    <input type="text" class="form-control" id="inputAddress" name="" placeholder="Nome impresso no cartão">
						  </div>
						  <div class="form-group">
						    <label for="inputAddress2">Número do cartão</label>
						    <input type="text" class="form-control" id="numerocard" name="numerocard" maxlength="16" placeholder="0000 0000 0000 0000">
						  </div>

						  
						  
						   <div class="input-group mb-3">
							<div class="row">
							  <div class="col-md-4 col-xs-4">
							    <div class="form-group">
							      <label for="volumeBolsa">Validade</label>
							      <input type="text" class="form-control" name="Validade" placeholder="MM / AA" maxlength="4">
							    
							    </div>
							  </div>
							  <div class="col-md-4 col-xs-4">
							    <div class="form-group">
							      <label for="volumeBolsa">CVV</label>
							      <input type="text" class="form-control" name="cvv" placeholder="CVV" maxlength="4">
							    </div>
							  </div>
							     <!--<div class="col-md-4 col-xs-4">
							    <div class="form-group">
							      <label for="volumeBolsa">Parcelas</label>
							      <input type="text" class="form-control" name="Parcelas" placeholder="Parcelas" required>
							    </div>
							  </div> -->
						
						
						</div>
					</div>
				<div class="product_count">
							<label for="Parcelas">Parcelas</label>
							<input class="foo" type="number" min="1" max="12" maxlength="4" value="1">
							<!-- <button onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst )) result.value++;return false;" class="increase items-count" type="button"><i class="lnr lnr-chevron-up"></i></button>
							<button onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst ) &amp;&amp; sst > 0 ) result.value--;return false;" class="reduced items-count" type="button"><i class="lnr lnr-chevron-down"></i></button> -->

						</div>
						até <b>12x </b>sem juros.







				<div class="form-group">
						  	 <div class="form-check">
						      <input class="form-check-input" type="checkbox" id="gridCheck">
						      <label class="form-check-label" for="gridCheck">
						        Salvar cartão
						      </label>


						    </div>

						  </div>
						  <!--<button>Pagar com outro cartão</button>-->
						 </form>
						 <hr/> 

						 

						 <br>

						  <div class="form-check">
							  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
							  <label class="form-check-label" for="exampleRadios1">
							    Boleto

							    <p>Imprima o boleto e <b>pague no banco</b> ou <b>pague pela internet</b> utilizando o código de barras do boleto.<br>O prazo de validade do boleto é de <b>1 dia util.</b></p>

							</label>
						</div>


                    </div>
                    </div>
                	</div>

                    </div>
                    <div class="col-lg-4">
                        <div class="order_box">
                            <h2>Seu pedido</h2>
                            <ul class="list">
                                <li><a href="#">Produto<span>Total</span></a></li>
                                <li><a href="#">Inglês básico<span class="last">R$720.00</span></a></li>
                                <li><a href="#">Matemática discreta<span class="last">R$720.00</span></a></li>
                                <li><a href="#">Administração Geral<span class="last">R$720.00</span></a></li>
                            </ul>
                            <ul class="list list_2">
                            <li><a href="#">Total <span>R$2210.00</span></a></li>
                            </ul>
                        
                          <!--  <div class="creat_account">
                                <input type="checkbox" id="f-option4" name="selector">
                                <label for="f-option4">Eu li e aceito os</label>
                                <a href="#">termos e condições*</a>
                            </div> -->
                            <a class="primary-btn" href="confirmation.php">Finalizar compra</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Checkout Area =================-->

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



			<!-- mascara inputs -->


			<!-- mascara inputs -->

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
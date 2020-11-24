<?php

session_start();
include("conexao.php");

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
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/linearicons.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/nouislider.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/main.css">
</head>

<body>

    <!-- Start Header Area -->
	<header class="header_area sticky-header">
        <div class="main_menu">
            <nav class="navbar navbar-expand-lg navbar-light main_box">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <a class="navbar-brand logo_h" href=" "><img src="imagens/logo.png" width="150px"></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                     aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                        <ul class="nav navbar-nav menu_nav ml-auto">
                            <!-- <li class="nav-item active"><a class="nav-link" href="index.html">Inicio</a></li> -->
                              <li class="nav-item submenu dropdown">
                                <!-- <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
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
                            </li> -->
                            <li class="nav-item submenu dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                                 aria-expanded="false">Meu Perfil</a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a class="nav-link" href=" ">Editar Perfil</a></li>
                                    <li class="nav-item"><a class="nav-link" href="add-product/add-product/add-product.php">Cadastrar Material</a></li>
                                    <!-- <li class="nav-item"><a class="nav-link" href=".html">Relatório de Vendas</a></li> -->
                                </ul>
                            </li>
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
        <div class="search_input" id="search_input_box" style="height: 45px;">
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
                    <h1>Carrinho de compras</h1>
                </div>
            </div>
        </div>
    </section>
    <!-- End Banner Area -->

    <!--================Cart Area =================-->
<br><br><br>

<div class = "Interface">
<div class="shopping-cart">

  <div class="column-labels">
    <label class="product-image">Image</label>
    <label class="product-details">Product</label>
    <label class="product-price">Preço</label>
    <label class="product-removal">Remove</label>
    <label class="product-line-price">Total</label>
  </div>


<?php
/*EXIBE NO CARRINHO*/
if(count($_SESSION['itens'])==0){
	echo 'Carrinho Vazio<br><a href="produtos.php">Adicionar itens</a>';
}
else{
	$_SESSION['dados'] = array();
	$conexao = new PDO ('mysql:host=localhost;dbname=bd_pi01',"root","");
	foreach($_SESSION['itens'] as $idArquivos=>$quantidade)
	{
    $select = $conexao->prepare("SELECT * FROM arquivos WHERE id=?");
    $select->bindParam(1,$idArquivos);
    $select->execute();
    $arquivos = $select->fetchALL();
    echo
    'Nome: '.$arquivos[0]["titulo_produto"].'<br/>
    Preço: '.$arquivos[0]["preco"].'<br/>
    <a href="remover.php?remover=carrinho&id='.$idArquivos.'">Remover</a><hr/>'
    ;
    array_push($_SESSION['dados'],
    array('id_arquivos' => $idArquivos,
    'titulo_produto'=> $arquivos[0]['titulo_produto'],
    'preco' => $arquivos[0]['preco']));
  }
  
  // print_r($_SESSION['dados']);

}
?>


<!--<div class="product">
    <div class="product-image">
      <img src="https://s.cdpn.io/3/large-NutroNaturalChoiceAdultLambMealandRiceDryDogFood.png">
    </div>
    <div class="product-details">
      <div class="product-title">Nutro™ Adult Lamb and Rice Dog Food</div>
    </div>
    <div class="product-price">45.99</div>
    <div class="product-removal">
      <button class="remove-product">
        Remover
      </button>
    </div>
    <div class="product-line-price">45.99</div>
  </div> -->
  <div class="totals">
    <div class="totals-item totals-item-total">
      <label>Total:</label>
      <div class="totals-value" id="cart-total"></div>
    </div>

  </div>
     <a href="checkout.php"><button class="checkout"><p>Checkout de pagamento</p></button></a>
      <a href="produtos.php"><button class="continue" ><p>Adicionar novos produtos</p></button></a>
</div> 

<br><br><br><br><br><br>
    <!--================End Cart Area =================-->

    <!-- start footer Area -->
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

    <!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script><script  src="js\script1.js"></script>
    <script src="js/vendor/jquery-2.2.4.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
	 crossorigin="anonymous"></script>
	<script src="js/vendor/bootstrap.min.js"></script>
	<script src="js/jquery.ajaxchimp.min.js"></script>
	<script src="js/jquery.nice-select.min.js"></script>
	<script src="js/jquery.sticky.js"></script>
    <script src="js/nouislider.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<!--gmaps Js-->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
	<script src="js/gmaps.min.js"></script>
	<script src="js/main.js"></script>
</body>

</html>
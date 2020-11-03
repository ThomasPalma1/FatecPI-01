<?php
session_start();
if(!isset($_SESSION['itens']))
{
	$_SESSION['itens']= array();
}

if(isset($_GET['add']) && $_GET['add'] == "carrinho")
{
	/*ADICIONA AO CARRINHO*/
	$idArquivos = $_GET['id'];
	if(!isset($_SESSION['itens'][$idArquivos]))
	{
		$_SESSION['itens'][$idArquivos]=1;
	}else{
		$_SESSION['itens'][$idArquivos] +=1;
	}
		
}
/*EXIBE NO CARRINHO*/
if(count($_SESSION['itens'])==0){
	echo 'Carrinho Vazio<br><a href="index.php">Adicionar itens</a>';
}else{
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
	echo '<a href="finalizar.php">Finalizar pedido</a>';
}
?>
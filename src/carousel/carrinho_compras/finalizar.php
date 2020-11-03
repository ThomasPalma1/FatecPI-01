<?php
    session_start();
    foreach($_SESSION['dados']as $arquivos){
		$conexao = new PDO ('mysql:host=localhost;dbname=bd_pi01',"root","");
		$insert = $conexao -> prepare ("INSERT INTO pedidos() VALUES (NULL,?,?,?)");
		$insert->bindParam(1, $arquivos['id_arquivos']);
		$insert->bindParam(2, $arquivos['titulo_produto']);
		$insert->bindParam(3, $arquivos['preco']);
		$insert->execute();
	}
?>
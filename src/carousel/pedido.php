<?php
include ('conexao.php');

$id = $_POST['id'];

$id_url = $_REQUEST['id'];

$titulo_produto = $_POST['titulo_produto'];
$preco = mysqli_real_escape_string ($conexao, trim($_POST['preco']));

$metodopag = mysqli_real_escape_string ($conexao, trim($_POST['metodopag']));

echo ($metodopag);


if ($metodopag == "cartao") {
	$parcelas  = intval($_POST['parcelas']);
	$result_contato = "INSERT INTO pedidos (id, titulo_produto, preco, parcelas, metodopag) VALUES ('$id', '$titulo_produto', '$preco', '$parcelas', '$metodopag')" ;
}
else {
	$parcelas = 0;
	$result_contato = "INSERT INTO pedidos (id, titulo_produto, preco, metodopag) VALUES ('$id', '$titulo_produto', '$preco', '$metodopag')" ;
}

if ($conexao->query($result_contato) == TRUE) {
     header("Location: pagcartao.php");
 }
 else{
     header("Location: checkout.php");
}
?>
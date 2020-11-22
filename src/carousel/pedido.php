<?php
include ('conexao.php');

$id = $_POST['id'];


$id_url = $_REQUEST['id'];

$titulo_produto = $_POST['titulo_produto'];
$preco = mysqli_real_escape_string ($conexao, trim($_POST['preco']));

$metodopag = mysqli_real_escape_string ($conexao, trim($_POST['metodopag']));

$email_usuario = mysqli_real_escape_string ($conexao, trim($_POST['email_usuario']));

echo ($metodopag);


if ($metodopag == "cartao") {
	$parcelas  = intval($_POST['parcelas']);
	$result_contato = "INSERT INTO pedidos (id, titulo_produto, preco, parcelas, metodopag, email_usuario) VALUES ('$id', '$titulo_produto', '$preco', '$parcelas', '$metodopag', '$email_usuario')" ;
}
else {
	$parcelas = 0;
	$result_contato = "INSERT INTO pedidos (id, titulo_produto, preco, metodopag, email_usuario) VALUES ('$id', '$titulo_produto', '$preco', '$metodopag', '$email_usuario')" ;
}

if ($conexao->query($result_contato) == TRUE && $metodopag=="cartao") {
	$id_pedido = mysqli_insert_id($conexao);
     header("Location: pagcartao.php?id=$id_pedido");
 }
 else{
 	$id_pedido = mysqli_insert_id($conexao);
     header("Location: pagboleto.php?id=$id_pedido");
}
?>
<?php
include ('conexao.php');

$id_produto = $_POST['id_produto'];
$nome = $_POST['nome'];
$email = $_POST['email'];
$mensagem = $_POST['mensagem'];


$result_contato = "INSERT INTO avaliacao (id_produto, nome, email, mensagem) VALUES ('$id_produto', '$nome', '$email', '$mensagem')";
$resultado_contato = mysqli_query($conexao, $result_contato);

if(mysqli_insert_id($conexao)){
    
    header("Location: single-product.php?id=$id_produto");
}
else{
    header("Location: single-product.php");
}


?>